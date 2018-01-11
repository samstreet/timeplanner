<?php

namespace App\Traits;

use App\Entity\User;
use Doctrine\ORM\EntityManager;

trait UsesPasswordGrant
{
    /**
     * @param string $userIdentifier
     * @return User
     */
    public function findForPassport($userIdentifier)
    {
        $userRepository = EntityManager::getRepository(get_class($this));
        return $userRepository->findOneByEmail($userIdentifier);
    }
}