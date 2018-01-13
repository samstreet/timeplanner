<?php

namespace App\Http\Controllers\API;

use App\Interfaces\Services\RoleServiceInterface;
use App\Interfaces\Services\UserServiceInterface;
use App\Interfaces\ICRUD;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller implements ICRUD
{

    /**
     * @var \App\Service\UserService
     */
    private $userService;

    /**
     * @var \App\Interfaces\Services\RoleServiceInterface
     */
    private $roleService;

    function __construct(
        UserServiceInterface $userService,
        RoleServiceInterface $roleService
    ) {
        $this->userService = $userService;
        $this->roleService = $roleService;
    }

    /**
     * @param $data
     */
    public function create($data)
    {
        // TODO: Implement create() method.
    }

    /**
     * @return array
     */
    public function fetchAll()
    {
        return $this->userService->getAllUsers();
    }

    /**
     * @param $id
     *
     * @return array
     */
    public function fetch($id)
    {
        $roleId = $this->roleService->getRoleByName('admin');

        if ($this->roleService->userHasRole(Auth::user()->getId(), $roleId)) {
                return Auth::user()->jsonSerialize();
        }

        return [
            'success' => 'false'
        ];
    }

    /**
     * @param $id
     * @param $data
     */
    public function update($id, $data)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

}
