<?php

namespace MoySklad\Entity\Document;

use JMS\Serializer\Annotation\Type;
use MoySklad\Entity\AbstractListEntity;
use MoySklad\Entity\MetaEntity;
use MoySklad\Util\Object\Annotation\Generator;
use MoySklad\Entity\Country;

/**
 * Позиции товаров
 */
class CustomerOrderPositions extends AbstractListEntity
{
    /**
     * @Type("array<MoySklad\Entity\Document\CustomerOrderPosition>")
     */
    public $rows;
}
