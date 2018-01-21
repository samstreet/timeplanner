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
     * @return \App\Entity\User
     */
    public function getUserRepository()
    {
        return $this->em->getRepository('App\Entity\User');
    }

    /**
     * @return \App\Entity\Assignment
     */
    public function getAssignmentRepository()
    {
        return $this->em->getRepository('App\Entity\Assignment');
    }

    /**
     * @return \App\Entity\Role
     */
    public function getRoleRepository()
    {
        return $this->em->getRepository('App\Entity\Role');
    }

    /**
     * @return \App\Entity\Task
     */
    public function getTaskRepository()
    {
        return $this->em->getRepository('App\Entity\Task');
    }

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    public function getEntityManager(): EntityManager
    {
        return $this->em;
    }


}
