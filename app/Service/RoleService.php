<?php
/**
 * @author Sam Street
 */

namespace App\Service;

use App\Interfaces\Services\RoleServiceInterface;

class RoleService extends BaseService implements RoleServiceInterface
{
    public function userHasRole($userId, $roleId): bool
    {
        return true;
    }

    public function getRoleByName($roleName)
    {
        return 1;
    }

}