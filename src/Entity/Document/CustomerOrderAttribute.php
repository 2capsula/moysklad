<?php

namespace MoySklad\Entity\Document;

use JMS\Serializer\Annotation\Type;
use MoySklad\Util\Object\Annotation\Generator;

class CustomerOrderAttribute
{
    /**
     * @Type("string")
     * @Generator()
     */
    public $name;

    /**
     * @Type("string")
     */
    public $href;

    /**
     * @Type("string")
     */
    public $fileName;

    /**
     * @Type("string")
     */
    public $value;

//    public $meta;
}
