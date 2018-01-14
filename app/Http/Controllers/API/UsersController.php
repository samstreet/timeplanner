<?php

namespace App\Http\Controllers\API;

use App\Interfaces\Services\RoleServiceInterface;
use App\Interfaces\Services\UserServiceInterface;
use App\Interfaces\ICRUD;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function fetch(Request $request)
    {
        $roleId = $this->roleService->getRoleByName('admin')->getId();

        if ($request->id == $request->user()->getId()) {
            return $this->userService->getUserById($request->id)->jsonSerialize();
        } else if ($this->roleService->userHasRole($request->user()->getId(), $roleId)) {
            return $this->userService->getUserById($request->id)->jsonSerialize();
        }

        return [
            'success' => 'false',
            'message' => 'Unable to find user'
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
