<?php

namespace AnnotationStaticReader\Example\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="item_media")
 */
class ItemMedia
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;
    /**
     * @ORM\ManyToOne(targetEntity="Item", inversedBy="media")
     * @ORM\JoinColumn(name="item_id", referencedColumnName="id")
     */
    private Item $item;
    /**
     * @ORM\Column(type="string")
     */
    private string $type;
    /**
     * @ORM\Column(type="string")
     */
    private string $url;
}
