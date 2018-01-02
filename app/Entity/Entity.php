<?php
/**
 * @author Sam Street
 */

namespace App\Entity;

use JsonSerializable;

/**
 * Class Base
 *
 * @package App\Entity
 */
abstract class Entity implements  JsonSerializable
{

    /**
     * @return string
     */
    function getClass(){
        return self::class;
    }

    /**
     * @return mixed
     */
    abstract function jsonSerialize();

}