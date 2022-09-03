# doctrine-annotation-static-reader

This script allows you to generate static container based on your annotations to increase performance of 
Doctrine metadata reading.

Usage:
```
php cli-generate.php ./src ./target-folder Target\Namespace
```
Example:
```
php cli-generate.php ./example ./example/result AnnotationStaticReader\Example\Result
```

In you application you should use `StaticAnnotationReader` instead of basic `DocReader`:
```
$config->setMetadataDriverImpl(
    new AnnotationDriver(
        new StaticAnnotationReader('AnnotationStaticReader\\Example\\Result'),
        [__DIR__ . '/src']
    )
);
```

Basically you want to use this driver only for production. Add call of this script into Build stage of your CI/CD.
