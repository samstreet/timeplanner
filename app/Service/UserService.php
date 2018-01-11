<?php
/**
 * @author Sam Street
 */

namespace App\Service;


use App\Entity\User;
use App\Repository\UserRepository;

class UserService extends BaseService
{

    /**
     * @param $data
     */
    public function create($data)
    {
        $user = new User();
        $user->setUsername( 'bilboswaggings' );
        $user->setFirstName('John');
        $user->setLastName('Smith');
        $user->setCreatedDate( (new \DateTime()));
        $user->setDob((new \DateTime()));
        $user->setEmail('bilbo@gmail.com');
        $user->setPassword(bcrypt('secret'));

        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();

        return $user;
    }

    /**
     * @param $id
     *
     * @return \App\Entity\User
     */
    public function getUserById($id)
    {
        return $this->getEntityManager()->find('App\Entity\User',$id);
    }

    /**
     * @param $email
     *
     * @return null|object
     */
    public function findByEmail($email)
    {
        return $this->getUserRepository()->findOneBy(
            [
                'email' => $email
            ]
        );
    }

}