<?php
/**
 * @author Sam Street
 */

namespace App\Service;
use Doctrine\ORM\EntityManager;

/**
 * Class BaseService
 *
 * @package App\Service
 */
abstract class BaseService
{

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $em;

    function __construct( EntityManager $em )
    {
        $this->em = $em;
    }

    /**
     * @var
     */
    protected $repo;

    /**
     * @return mixed
     */
    public function getRepo()
    {
        return $this->repo;
    }

    /**
     * @return \Doctrine\ORM\EntityRepository
     */
    public function getUserRepository(){
        return $this->em->getRepository('App\Entity\User');
    }

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    public function getEntityManager(): \Doctrine\ORM\EntityManager
    {
        return $this->em;
    }



}
