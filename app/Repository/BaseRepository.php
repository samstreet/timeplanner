<?php
/**
 * @author Sam Street
 */

namespace App\Repository;

use App\Entity\Entity;
use Doctrine\ORM\EntityManager;

abstract class BaseRepository
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $em;

    /**
     * BaseRepository constructor.
     *
     * @param \Doctrine\ORM\EntityManager $em
     */
    function __construct( EntityManager $em )
    {
        $this->em =$em;
    }

    /**
     * @param $id
     *
     * @return \App\Entity\Entity
     */
    abstract public function find( $id ) : Entity;

}