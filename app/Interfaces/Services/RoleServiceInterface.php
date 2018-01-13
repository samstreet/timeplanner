<?php

namespace App\Interfaces\Services;

/**
 * @author Sam Street
 */
interface RoleServiceInterface
{
    public function userHasRole($userId, $roleId) : bool;
    public function getRoleByName($roleName);
}
