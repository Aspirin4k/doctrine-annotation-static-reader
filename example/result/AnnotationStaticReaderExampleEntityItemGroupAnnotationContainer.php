<?php declare(strict_types=1);

namespace StaticAnnotationReader\Example\Result;

class AnnotationStaticReaderExampleEntityItemGroupAnnotationContainer
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
            self::$annotations['class'][\Doctrine\ORM\Mapping\Table::class]->name = 'item_group';
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
            self::$annotations['property']['externalId'] = [];

            $column = new \ReflectionClass(\Doctrine\ORM\Mapping\Column::class);
            self::$annotations['property']['externalId'][\Doctrine\ORM\Mapping\Column::class] = $column->newInstanceWithoutConstructor();
            self::$annotations['property']['externalId'][\Doctrine\ORM\Mapping\Column::class]->name = null;
            self::$annotations['property']['externalId'][\Doctrine\ORM\Mapping\Column::class]->type = 'string';
            self::$annotations['property']['externalId'][\Doctrine\ORM\Mapping\Column::class]->length = null;
            self::$annotations['property']['externalId'][\Doctrine\ORM\Mapping\Column::class]->precision = null;
            self::$annotations['property']['externalId'][\Doctrine\ORM\Mapping\Column::class]->scale = null;
            self::$annotations['property']['externalId'][\Doctrine\ORM\Mapping\Column::class]->unique = false;
            self::$annotations['property']['externalId'][\Doctrine\ORM\Mapping\Column::class]->nullable = false;
            self::$annotations['property']['externalId'][\Doctrine\ORM\Mapping\Column::class]->options = [];
            self::$annotations['property']['externalId'][\Doctrine\ORM\Mapping\Column::class]->columnDefinition = null;
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
            self::$annotations['property']['items'] = [];

            $manyToMany = new \ReflectionClass(\Doctrine\ORM\Mapping\ManyToMany::class);
            self::$annotations['property']['items'][\Doctrine\ORM\Mapping\ManyToMany::class] = $manyToMany->newInstanceWithoutConstructor();
            self::$annotations['property']['items'][\Doctrine\ORM\Mapping\ManyToMany::class]->targetEntity = 'Item';
            self::$annotations['property']['items'][\Doctrine\ORM\Mapping\ManyToMany::class]->mappedBy = null;
            self::$annotations['property']['items'][\Doctrine\ORM\Mapping\ManyToMany::class]->inversedBy = 'groups';
            self::$annotations['property']['items'][\Doctrine\ORM\Mapping\ManyToMany::class]->cascade = null;
            self::$annotations['property']['items'][\Doctrine\ORM\Mapping\ManyToMany::class]->fetch = 'LAZY';
            self::$annotations['property']['items'][\Doctrine\ORM\Mapping\ManyToMany::class]->orphanRemoval = false;
            self::$annotations['property']['items'][\Doctrine\ORM\Mapping\ManyToMany::class]->indexBy = null;

            $joinTable = new \ReflectionClass(\Doctrine\ORM\Mapping\JoinTable::class);
            self::$annotations['property']['items'][\Doctrine\ORM\Mapping\JoinTable::class] = $joinTable->newInstanceWithoutConstructor();
            self::$annotations['property']['items'][\Doctrine\ORM\Mapping\JoinTable::class]->name = 'item_in_group';
            self::$annotations['property']['items'][\Doctrine\ORM\Mapping\JoinTable::class]->schema = null;
            self::$annotations['property']['items'][\Doctrine\ORM\Mapping\JoinTable::class]->joinColumns = [];
            self::$annotations['property']['items'][\Doctrine\ORM\Mapping\JoinTable::class]->inverseJoinColumns = [];

        }

        return self::$annotations;
    }
}
