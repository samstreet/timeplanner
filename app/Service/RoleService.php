<?php
/**
 * @author Sam Street
 */

namespace App\Service;

use App\Interfaces\Services\RoleServiceInterface;

class RoleService extends BaseService implements RoleServiceInterface
{

    /**
     * @param $userId
     * @param $roleId
     *
     * @return bool
     */
    public function userHasRole($userId, $roleId): bool
    {
        $user = $this->getUserRepository()->findOneBy([
            'id' => $userId
        ]);

        if( $user ){
            if($user->getRole()->getId() == $roleId){
                return true;
            }
        }

        return false;
    }

    /**
     * @param $roleName
     *
     * @return null|object
     */
    public function getRoleByName($roleName)
    {
        return $this->getRoleRepository()->findOneBy([
            'rolename' => $roleName
        ]);
    }

}