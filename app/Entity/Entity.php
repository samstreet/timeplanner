<?php
/**
 * @author Sam Street
 */

namespace App\Entity;

/**
 * Class Base
 *
 * @package App\Entity
 */
abstract class Entity
{

    /**
     * @return string
     */
    function getClass(){
        return self::class;
    }

}