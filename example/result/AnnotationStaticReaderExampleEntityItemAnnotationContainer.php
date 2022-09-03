<?php declare(strict_types=1);

namespace StaticAnnotationReader\Example\Result;

class AnnotationStaticReaderExampleEntityItemAnnotationContainer
{
    private static array $annotations = [];

    public static function getAnnotations(): array
    {
        if (empty(self::$annotations)) {
            self::$annotations['class'] = [];

            $entity = new \ReflectionClass(\Doctrine\ORM\Mapping\Entity::class);
            self::$annotations['class'][\Doctrine\ORM\Mapping\Entity::class] = $entity->newInstanceWithoutConstructor();
            self::$annotations['class'][\Doctrine\ORM\Mapping\Entity::class]->repositoryClass = null;
            self::$annotations['class'][\Doctrine\ORM\Mapping\Entity::class]->readOnly = false;

            $table = new \ReflectionClass(\Doctrine\ORM\Mapping\Table::class);
            self::$annotations['class'][\Doctrine\ORM\Mapping\Table::class] = $table->newInstanceWithoutConstructor();
            self::$annotations['class'][\Doctrine\ORM\Mapping\Table::class]->name = 'item';
            self::$annotations['class'][\Doctrine\ORM\Mapping\Table::class]->schema = null;
            self::$annotations['class'][\Doctrine\ORM\Mapping\Table::class]->indexes = null;
            self::$annotations['class'][\Doctrine\ORM\Mapping\Table::class]->uniqueConstraints = null;
            self::$annotations['class'][\Doctrine\ORM\Mapping\Table::class]->options = [];
            self::$annotations['method'] = [];
            self::$annotations['property'] = [];
            self::$annotations['property']['id'] = [];

            $id = new \ReflectionClass(\Doctrine\ORM\Mapping\Id::class);
            self::$annotations['property']['id'][\Doctrine\ORM\Mapping\Id::class] = $id->newInstanceWithoutConstructor();

            $column = new \ReflectionClass(\Doctrine\ORM\Mapping\Column::class);
            self::$annotations['property']['id'][\Doctrine\ORM\Mapping\Column::class] = $column->newInstanceWithoutConstructor();
            self::$annotations['property']['id'][\Doctrine\ORM\Mapping\Column::class]->name = null;
            self::$annotations['property']['id'][\Doctrine\ORM\Mapping\Column::class]->type = 'integer';
            self::$annotations['property']['id'][\Doctrine\ORM\Mapping\Column::class]->length = null;
            self::$annotations['property']['id'][\Doctrine\ORM\Mapping\Column::class]->precision = null;
            self::$annotations['property']['id'][\Doctrine\ORM\Mapping\Column::class]->scale = null;
            self::$annotations['property']['id'][\Doctrine\ORM\Mapping\Column::class]->unique = false;
            self::$annotations['property']['id'][\Doctrine\ORM\Mapping\Column::class]->nullable = false;
            self::$annotations['property']['id'][\Doctrine\ORM\Mapping\Column::class]->options = [];
            self::$annotations['property']['id'][\Doctrine\ORM\Mapping\Column::class]->columnDefinition = null;

            $generatedValue = new \ReflectionClass(\Doctrine\ORM\Mapping\GeneratedValue::class);
            self::$annotations['property']['id'][\Doctrine\ORM\Mapping\GeneratedValue::class] = $generatedValue->newInstanceWithoutConstructor();
            self::$annotations['property']['id'][\Doctrine\ORM\Mapping\GeneratedValue::class]->strategy = 'AUTO';
            self::$annotations['property']['sku'] = [];

            $column = new \ReflectionClass(\Doctrine\ORM\Mapping\Column::class);
            self::$annotations['property']['sku'][\Doctrine\ORM\Mapping\Column::class] = $column->newInstanceWithoutConstructor();
            self::$annotations['property']['sku'][\Doctrine\ORM\Mapping\Column::class]->name = null;
            self::$annotations['property']['sku'][\Doctrine\ORM\Mapping\Column::class]->type = 'string';
            self::$annotations['property']['sku'][\Doctrine\ORM\Mapping\Column::class]->length = null;
            self::$annotations['property']['sku'][\Doctrine\ORM\Mapping\Column::class]->precision = null;
            self::$annotations['property']['sku'][\Doctrine\ORM\Mapping\Column::class]->scale = null;
            self::$annotations['property']['sku'][\Doctrine\ORM\Mapping\Column::class]->unique = false;
            self::$annotations['property']['sku'][\Doctrine\ORM\Mapping\Column::class]->nullable = false;
            self::$annotations['property']['sku'][\Doctrine\ORM\Mapping\Column::class]->options = [];
            self::$annotations['property']['sku'][\Doctrine\ORM\Mapping\Column::class]->columnDefinition = null;
            self::$annotations['property']['type'] = [];

            $column = new \ReflectionClass(\Doctrine\ORM\Mapping\Column::class);
            self::$annotations['property']['type'][\Doctrine\ORM\Mapping\Column::class] = $column->newInstanceWithoutConstructor();
            self::$annotations['property']['type'][\Doctrine\ORM\Mapping\Column::class]->name = null;
            self::$annotations['property']['type'][\Doctrine\ORM\Mapping\Column::class]->type = 'string';
            self::$annotations['property']['type'][\Doctrine\ORM\Mapping\Column::class]->length = null;
            self::$annotations['property']['type'][\Doctrine\ORM\Mapping\Column::class]->precision = null;
            self::$annotations['property']['type'][\Doctrine\ORM\Mapping\Column::class]->scale = null;
            self::$annotations['property']['type'][\Doctrine\ORM\Mapping\Column::class]->unique = false;
            self::$annotations['property']['type'][\Doctrine\ORM\Mapping\Column::class]->nullable = false;
            self::$annotations['property']['type'][\Doctrine\ORM\Mapping\Column::class]->options = [];
            self::$annotations['property']['type'][\Doctrine\ORM\Mapping\Column::class]->columnDefinition = null;
            self::$annotations['property']['name'] = [];

            $column = new \ReflectionClass(\Doctrine\ORM\Mapping\Column::class);
            self::$annotations['property']['name'][\Doctrine\ORM\Mapping\Column::class] = $column->newInstanceWithoutConstructor();
            self::$annotations['property']['name'][\Doctrine\ORM\Mapping\Column::class]->name = null;
            self::$annotations['property']['name'][\Doctrine\ORM\Mapping\Column::class]->type = 'string';
            self::$annotations['property']['name'][\Doctrine\ORM\Mapping\Column::class]->length = null;
            self::$annotations['property']['name'][\Doctrine\ORM\Mapping\Column::class]->precision = null;
            self::$annotations['property']['name'][\Doctrine\ORM\Mapping\Column::class]->scale = null;
            self::$annotations['property']['name'][\Doctrine\ORM\Mapping\Column::class]->unique = false;
            self::$annotations['property']['name'][\Doctrine\ORM\Mapping\Column::class]->nullable = false;
            self::$annotations['property']['name'][\Doctrine\ORM\Mapping\Column::class]->options = [];
            self::$annotations['property']['name'][\Doctrine\ORM\Mapping\Column::class]->columnDefinition = null;
            self::$annotations['property']['description'] = [];

            $column = new \ReflectionClass(\Doctrine\ORM\Mapping\Column::class);
            self::$annotations['property']['description'][\Doctrine\ORM\Mapping\Column::class] = $column->newInstanceWithoutConstructor();
            self::$annotations['property']['description'][\Doctrine\ORM\Mapping\Column::class]->name = null;
            self::$annotations['property']['description'][\Doctrine\ORM\Mapping\Column::class]->type = 'string';
            self::$annotations['property']['description'][\Doctrine\ORM\Mapping\Column::class]->length = null;
            self::$annotations['property']['description'][\Doctrine\ORM\Mapping\Column::class]->precision = null;
            self::$annotations['property']['description'][\Doctrine\ORM\Mapping\Column::class]->scale = null;
            self::$annotations['property']['description'][\Doctrine\ORM\Mapping\Column::class]->unique = false;
            self::$annotations['property']['description'][\Doctrine\ORM\Mapping\Column::class]->nullable = false;
            self::$annotations['property']['description'][\Doctrine\ORM\Mapping\Column::class]->options = [];
            self::$annotations['property']['description'][\Doctrine\ORM\Mapping\Column::class]->columnDefinition = null;
            self::$annotations['property']['shopId'] = [];

            $column = new \ReflectionClass(\Doctrine\ORM\Mapping\Column::class);
            self::$annotations['property']['shopId'][\Doctrine\ORM\Mapping\Column::class] = $column->newInstanceWithoutConstructor();
            self::$annotations['property']['shopId'][\Doctrine\ORM\Mapping\Column::class]->name = null;
            self::$annotations['property']['shopId'][\Doctrine\ORM\Mapping\Column::class]->type = 'integer';
            self::$annotations['property']['shopId'][\Doctrine\ORM\Mapping\Column::class]->length = null;
            self::$annotations['property']['shopId'][\Doctrine\ORM\Mapping\Column::class]->precision = null;
            self::$annotations['property']['shopId'][\Doctrine\ORM\Mapping\Column::class]->scale = null;
            self::$annotations['property']['shopId'][\Doctrine\ORM\Mapping\Column::class]->unique = false;
            self::$annotations['property']['shopId'][\Doctrine\ORM\Mapping\Column::class]->nullable = false;
            self::$annotations['property']['shopId'][\Doctrine\ORM\Mapping\Column::class]->options = [];
            self::$annotations['property']['shopId'][\Doctrine\ORM\Mapping\Column::class]->columnDefinition = null;
            self::$annotations['property']['isFree'] = [];

            $column = new \ReflectionClass(\Doctrine\ORM\Mapping\Column::class);
            self::$annotations['property']['isFree'][\Doctrine\ORM\Mapping\Column::class] = $column->newInstanceWithoutConstructor();
            self::$annotations['property']['isFree'][\Doctrine\ORM\Mapping\Column::class]->name = null;
            self::$annotations['property']['isFree'][\Doctrine\ORM\Mapping\Column::class]->type = 'boolean';
            self::$annotations['property']['isFree'][\Doctrine\ORM\Mapping\Column::class]->length = null;
            self::$annotations['property']['isFree'][\Doctrine\ORM\Mapping\Column::class]->precision = null;
            self::$annotations['property']['isFree'][\Doctrine\ORM\Mapping\Column::class]->scale = null;
            self::$annotations['property']['isFree'][\Doctrine\ORM\Mapping\Column::class]->unique = false;
            self::$annotations['property']['isFree'][\Doctrine\ORM\Mapping\Column::class]->nullable = false;
            self::$annotations['property']['isFree'][\Doctrine\ORM\Mapping\Column::class]->options = [];
            self::$annotations['property']['isFree'][\Doctrine\ORM\Mapping\Column::class]->columnDefinition = null;
            self::$annotations['property']['isEnabled'] = [];

            $column = new \ReflectionClass(\Doctrine\ORM\Mapping\Column::class);
            self::$annotations['property']['isEnabled'][\Doctrine\ORM\Mapping\Column::class] = $column->newInstanceWithoutConstructor();
            self::$annotations['property']['isEnabled'][\Doctrine\ORM\Mapping\Column::class]->name = null;
            self::$annotations['property']['isEnabled'][\Doctrine\ORM\Mapping\Column::class]->type = 'boolean';
            self::$annotations['property']['isEnabled'][\Doctrine\ORM\Mapping\Column::class]->length = null;
            self::$annotations['property']['isEnabled'][\Doctrine\ORM\Mapping\Column::class]->precision = null;
            self::$annotations['property']['isEnabled'][\Doctrine\ORM\Mapping\Column::class]->scale = null;
            self::$annotations['property']['isEnabled'][\Doctrine\ORM\Mapping\Column::class]->unique = false;
            self::$annotations['property']['isEnabled'][\Doctrine\ORM\Mapping\Column::class]->nullable = false;
            self::$annotations['property']['isEnabled'][\Doctrine\ORM\Mapping\Column::class]->options = [];
            self::$annotations['property']['isEnabled'][\Doctrine\ORM\Mapping\Column::class]->columnDefinition = null;
            self::$annotations['property']['isDeleted'] = [];

            $column = new \ReflectionClass(\Doctrine\ORM\Mapping\Column::class);
            self::$annotations['property']['isDeleted'][\Doctrine\ORM\Mapping\Column::class] = $column->newInstanceWithoutConstructor();
            self::$annotations['property']['isDeleted'][\Doctrine\ORM\Mapping\Column::class]->name = null;
            self::$annotations['property']['isDeleted'][\Doctrine\ORM\Mapping\Column::class]->type = 'boolean';
            self::$annotations['property']['isDeleted'][\Doctrine\ORM\Mapping\Column::class]->length = null;
            self::$annotations['property']['isDeleted'][\Doctrine\ORM\Mapping\Column::class]->precision = null;
            self::$annotations['property']['isDeleted'][\Doctrine\ORM\Mapping\Column::class]->scale = null;
            self::$annotations['property']['isDeleted'][\Doctrine\ORM\Mapping\Column::class]->unique = false;
            self::$annotations['property']['isDeleted'][\Doctrine\ORM\Mapping\Column::class]->nullable = false;
            self::$annotations['property']['isDeleted'][\Doctrine\ORM\Mapping\Column::class]->options = [];
            self::$annotations['property']['isDeleted'][\Doctrine\ORM\Mapping\Column::class]->columnDefinition = null;
            self::$annotations['property']['prices'] = [];

            $oneToMany = new \ReflectionClass(\Doctrine\ORM\Mapping\OneToMany::class);
            self::$annotations['property']['prices'][\Doctrine\ORM\Mapping\OneToMany::class] = $oneToMany->newInstanceWithoutConstructor();
            self::$annotations['property']['prices'][\Doctrine\ORM\Mapping\OneToMany::class]->mappedBy = 'item';
            self::$annotations['property']['prices'][\Doctrine\ORM\Mapping\OneToMany::class]->targetEntity = 'ItemPrice';
            self::$annotations['property']['prices'][\Doctrine\ORM\Mapping\OneToMany::class]->cascade = null;
            self::$annotations['property']['prices'][\Doctrine\ORM\Mapping\OneToMany::class]->fetch = 'LAZY';
            self::$annotations['property']['prices'][\Doctrine\ORM\Mapping\OneToMany::class]->orphanRemoval = false;
            self::$annotations['property']['prices'][\Doctrine\ORM\Mapping\OneToMany::class]->indexBy = null;
            self::$annotations['property']['media'] = [];

            $oneToMany = new \ReflectionClass(\Doctrine\ORM\Mapping\OneToMany::class);
            self::$annotations['property']['media'][\Doctrine\ORM\Mapping\OneToMany::class] = $oneToMany->newInstanceWithoutConstructor();
            self::$annotations['property']['media'][\Doctrine\ORM\Mapping\OneToMany::class]->mappedBy = 'item';
            self::$annotations['property']['media'][\Doctrine\ORM\Mapping\OneToMany::class]->targetEntity = 'ItemMedia';
            self::$annotations['property']['media'][\Doctrine\ORM\Mapping\OneToMany::class]->cascade = null;
            self::$annotations['property']['media'][\Doctrine\ORM\Mapping\OneToMany::class]->fetch = 'LAZY';
            self::$annotations['property']['media'][\Doctrine\ORM\Mapping\OneToMany::class]->orphanRemoval = false;
            self::$annotations['property']['media'][\Doctrine\ORM\Mapping\OneToMany::class]->indexBy = null;
            self::$annotations['property']['attributes'] = [];

            $oneToMany = new \ReflectionClass(\Doctrine\ORM\Mapping\OneToMany::class);
            self::$annotations['property']['attributes'][\Doctrine\ORM\Mapping\OneToMany::class] = $oneToMany->newInstanceWithoutConstructor();
            self::$annotations['property']['attributes'][\Doctrine\ORM\Mapping\OneToMany::class]->mappedBy = 'item';
            self::$annotations['property']['attributes'][\Doctrine\ORM\Mapping\OneToMany::class]->targetEntity = 'ItemMedia';
            self::$annotations['property']['attributes'][\Doctrine\ORM\Mapping\OneToMany::class]->cascade = null;
            self::$annotations['property']['attributes'][\Doctrine\ORM\Mapping\OneToMany::class]->fetch = 'LAZY';
            self::$annotations['property']['attributes'][\Doctrine\ORM\Mapping\OneToMany::class]->orphanRemoval = false;
            self::$annotations['property']['attributes'][\Doctrine\ORM\Mapping\OneToMany::class]->indexBy = null;
            self::$annotations['property']['groups'] = [];

            $manyToMany = new \ReflectionClass(\Doctrine\ORM\Mapping\ManyToMany::class);
            self::$annotations['property']['groups'][\Doctrine\ORM\Mapping\ManyToMany::class] = $manyToMany->newInstanceWithoutConstructor();
            self::$annotations['property']['groups'][\Doctrine\ORM\Mapping\ManyToMany::class]->targetEntity = 'ItemGroup';
            self::$annotations['property']['groups'][\Doctrine\ORM\Mapping\ManyToMany::class]->mappedBy = 'items';
            self::$annotations['property']['groups'][\Doctrine\ORM\Mapping\ManyToMany::class]->inversedBy = null;
            self::$annotations['property']['groups'][\Doctrine\ORM\Mapping\ManyToMany::class]->cascade = null;
            self::$annotations['property']['groups'][\Doctrine\ORM\Mapping\ManyToMany::class]->fetch = 'LAZY';
            self::$annotations['property']['groups'][\Doctrine\ORM\Mapping\ManyToMany::class]->orphanRemoval = false;
            self::$annotations['property']['groups'][\Doctrine\ORM\Mapping\ManyToMany::class]->indexBy = null;

        }

        return self::$annotations;
    }
}
