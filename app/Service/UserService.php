<?php
/**
 * @author Sam Street
 */

namespace App\Service;


use App\Repository\UserRepository;

class UserService extends BaseService
{

    /**
     * UserService constructor.
     *
     * @param \App\Repository\UserRepository $repo
     */
    function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * @param $id
     *
     * @return \App\Entity\User
     */
    public function getUserById($id)
    {
        return $this->repo->find($id);
    }

}