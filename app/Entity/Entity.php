<?php
/**
 * @author Sam Street
 */

namespace App\Entity;

use App\Service\UserService;
use Doctrine\ORM\EntityManager;
use Illuminate\Support\Facades\App;
use JsonSerializable;
use App\Service\BaseService;

/**
 * Class Base
 *
 * @package App\Entity
 */
abstract class Entity implements JsonSerializable
{

    /**
     * @return string
     */
    function getClass()
    {
        return self::class;
    }

    /**
     * @return mixed
     */
    abstract function jsonSerialize();

    /**
     * @param string $userIdentifier
     *
     * @return User
     */
    public function findForPassport($userIdentifier)
    {
        $instance = App::make(EntityManager::class);

        return $instance->getRepository('App\Entity\User')->findOneBy(
            [
                'email' => $userIdentifier
            ]
        );
    }

}