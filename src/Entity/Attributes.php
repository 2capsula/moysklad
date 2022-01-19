<?php

namespace MoySklad\Entity;

use JMS\Serializer\Annotation\Type;

class Attributes extends MetaEntity //@todo create deserializer
{
    /**
     * @Type("string")
     */
    public $value;

    /**
     * @Type("array<MoySklad\Entity\Attribute>")
     */
    public $rows;
}
