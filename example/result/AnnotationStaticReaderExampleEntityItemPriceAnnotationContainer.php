<?php declare(strict_types=1);

namespace StaticAnnotationReader\Example\Result;

class AnnotationStaticReaderExampleEntityItemPriceAnnotationContainer
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
            self::$annotations['class'][\Doctrine\ORM\Mapping\Table::class]->name = 'item_price';
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
            self::$annotations['property']['item'] = [];

            $manyToOne = new \ReflectionClass(\Doctrine\ORM\Mapping\ManyToOne::class);
            self::$annotations['property']['item'][\Doctrine\ORM\Mapping\ManyToOne::class] = $manyToOne->newInstanceWithoutConstructor();
            self::$annotations['property']['item'][\Doctrine\ORM\Mapping\ManyToOne::class]->targetEntity = 'Item';
            self::$annotations['property']['item'][\Doctrine\ORM\Mapping\ManyToOne::class]->cascade = null;
            self::$annotations['property']['item'][\Doctrine\ORM\Mapping\ManyToOne::class]->fetch = 'LAZY';
            self::$annotations['property']['item'][\Doctrine\ORM\Mapping\ManyToOne::class]->inversedBy = 'prices';

            $joinColumn = new \ReflectionClass(\Doctrine\ORM\Mapping\JoinColumn::class);
            self::$annotations['property']['item'][\Doctrine\ORM\Mapping\JoinColumn::class] = $joinColumn->newInstanceWithoutConstructor();
            self::$annotations['property']['item'][\Doctrine\ORM\Mapping\JoinColumn::class]->name = 'item_id';
            self::$annotations['property']['item'][\Doctrine\ORM\Mapping\JoinColumn::class]->referencedColumnName = 'id';
            self::$annotations['property']['item'][\Doctrine\ORM\Mapping\JoinColumn::class]->unique = false;
            self::$annotations['property']['item'][\Doctrine\ORM\Mapping\JoinColumn::class]->nullable = true;
            self::$annotations['property']['item'][\Doctrine\ORM\Mapping\JoinColumn::class]->onDelete = null;
            self::$annotations['property']['item'][\Doctrine\ORM\Mapping\JoinColumn::class]->columnDefinition = null;
            self::$annotations['property']['item'][\Doctrine\ORM\Mapping\JoinColumn::class]->fieldName = null;
            self::$annotations['property']['amount'] = [];

            $column = new \ReflectionClass(\Doctrine\ORM\Mapping\Column::class);
            self::$annotations['property']['amount'][\Doctrine\ORM\Mapping\Column::class] = $column->newInstanceWithoutConstructor();
            self::$annotations['property']['amount'][\Doctrine\ORM\Mapping\Column::class]->name = null;
            self::$annotations['property']['amount'][\Doctrine\ORM\Mapping\Column::class]->type = 'string';
            self::$annotations['property']['amount'][\Doctrine\ORM\Mapping\Column::class]->length = null;
            self::$annotations['property']['amount'][\Doctrine\ORM\Mapping\Column::class]->precision = null;
            self::$annotations['property']['amount'][\Doctrine\ORM\Mapping\Column::class]->scale = null;
            self::$annotations['property']['amount'][\Doctrine\ORM\Mapping\Column::class]->unique = false;
            self::$annotations['property']['amount'][\Doctrine\ORM\Mapping\Column::class]->nullable = false;
            self::$annotations['property']['amount'][\Doctrine\ORM\Mapping\Column::class]->options = [];
            self::$annotations['property']['amount'][\Doctrine\ORM\Mapping\Column::class]->columnDefinition = null;
            self::$annotations['property']['currency'] = [];

            $column = new \ReflectionClass(\Doctrine\ORM\Mapping\Column::class);
            self::$annotations['property']['currency'][\Doctrine\ORM\Mapping\Column::class] = $column->newInstanceWithoutConstructor();
            self::$annotations['property']['currency'][\Doctrine\ORM\Mapping\Column::class]->name = null;
            self::$annotations['property']['currency'][\Doctrine\ORM\Mapping\Column::class]->type = 'string';
            self::$annotations['property']['currency'][\Doctrine\ORM\Mapping\Column::class]->length = null;
            self::$annotations['property']['currency'][\Doctrine\ORM\Mapping\Column::class]->precision = null;
            self::$annotations['property']['currency'][\Doctrine\ORM\Mapping\Column::class]->scale = null;
            self::$annotations['property']['currency'][\Doctrine\ORM\Mapping\Column::class]->unique = false;
            self::$annotations['property']['currency'][\Doctrine\ORM\Mapping\Column::class]->nullable = false;
            self::$annotations['property']['currency'][\Doctrine\ORM\Mapping\Column::class]->options = [];
            self::$annotations['property']['currency'][\Doctrine\ORM\Mapping\Column::class]->columnDefinition = null;

        }

        return self::$annotations;
    }
}
