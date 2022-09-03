<?php

declare(strict_types=1);

use AnnotationStaticReader\AnnotationGenerator;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\DocParser;
use Doctrine\ORM\Mapping\Entity;

require_once __DIR__ . '/vendor/autoload.php';

$sourcesDirectory = $argv[1] ?? null;
$resultsDirectory = $argv[2] ?? null;
$resultsNamespace = $argv[3] ?? null;

if (null === $sourcesDirectory || null === $resultsDirectory || null === $resultsNamespace) {
    echo 'Usage: php cli-generate.php *project_sources* *target_directory* *target_namespace*' . "\n";
    echo 'Example: php cli-generate.php ./example ./example/result AnnotationStaticReader\\Example\\Result' . "\n";
    return;
}

$cwd = getcwd();
$resultsDirectory = $cwd . '/' . $resultsDirectory;
$sourcesDirectory = $cwd . '/' . $sourcesDirectory;

if (!file_exists($resultsDirectory)) {
    mkdir($resultsDirectory, 0777, true);
}

$annotationReader = new AnnotationReader(new DocParser());
$annotationGenerator = new AnnotationGenerator(
    $annotationReader,
    $resultsNamespace
);

$files = array_flip(glob($sourcesDirectory . '/**/*.php'));
$flippedFiles = [];
foreach ($files as $file => $_) {
    require_once $file;
    $flippedFiles[realpath($file)] = 1;
}

$toGenerate = [];
foreach (get_declared_classes() as $class) {
    $reflectionClass = new ReflectionClass($class);
    if (!array_key_exists($reflectionClass->getFileName(), $flippedFiles)) {
        continue;
    }

    if (null === $annotationReader->getClassAnnotation($reflectionClass, Entity::class)) {
        continue;
    };

    $toGenerate[] = $reflectionClass;
}

echo "===================================================================\n";
echo 'Generating annotation containers for ' . count($toGenerate) . " entities\n";
foreach ($toGenerate as $reflection) {
    $entity = $reflection->getName();
    echo 'Start ' . $entity . "\n";

    $code = $annotationGenerator->generate($reflection);
    file_put_contents(
        $resultsDirectory . '/' . AnnotationGenerator::getAnnotationContainerClass($entity) . '.php',
        $code
    );

    echo 'Done ' . $entity . "\n";
}
