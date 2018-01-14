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

    function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * @return \Doctrine\ORM\EntityRepository
     */
    public function getUserRepository()
    {
        return $this->em->getRepository('App\Entity\User');
    }

    /**
     * @return \Doctrine\ORM\EntityRepository
     */
    public function getAssignmentRepository()
    {
        return $this->em->getRepository('App\Entity\Assignment');
    }

    /**
     * @return \Doctrine\ORM\EntityRepository
     */
    public function getRoleRepository()
    {
        return $this->em->getRepository('App\Entity\Role');
    }

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    public function getEntityManager(): EntityManager
    {
        return $this->em;
    }


}
