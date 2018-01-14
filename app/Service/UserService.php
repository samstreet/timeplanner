<?php
/**
 * @author Sam Street
 */

namespace App\Service;


use App\Entity\User;
use App\Interfaces\Services\UserServiceInterface;
use App\Repository\UserRepository;

class UserService extends BaseService implements UserServiceInterface
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

    public function fetch($id)
    {
        // TODO: Implement fetch() method.
    }

    public function update($id, $data)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }


    /**
     * @param $id
     *
     * @return \App\Entity\User
     */
    public function getUserById($id)
    {
        return $this->getUserRepository()->find($id);
    }

    /**
     * @return array
     */
    public function getAllUsers(){
        return $this->getUserRepository()->findAll();
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