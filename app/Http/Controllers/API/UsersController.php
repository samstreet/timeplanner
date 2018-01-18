<?php

namespace App\Http\Controllers\API;

use App\Interfaces\Services\RoleServiceInterface;
use App\Interfaces\Services\UserServiceInterface;
use App\Interfaces\ICRUD;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
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
    public function create(Request $request)
    {
        // TODO: Implement create() method.
    }

    /**
     * @return array
     */
    public function fetchAll(Request $request)
    {
        $roleId = $this->roleService->getRoleByName('admin')->getId();

        if ($this->roleService->userHasRole($request->user()->getId(), $roleId)) {
            return response($this->userService->getAllUsers(), Response::HTTP_OK)->header('Content-Type', 'application/json');
        }

        return response(
            [
                'success' => false,
                'message' => 'Insufficient permissions'
            ], Response::HTTP_FORBIDDEN
        )->header('Content-Type', 'application/json');
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
            return response($this->userService->getUserById($request->id)->jsonSerialize(), Response::HTTP_OK);
        } else if ($this->roleService->userHasRole($request->user()->getId(), $roleId)) {
            return response($this->userService->getUserById($request->id)->jsonSerialize(), Response::HTTP_OK);
        }

        return response(
            [
                'success' => false,
                'message' => 'User not found'
            ], Response::HTTP_NOT_FOUND
        )->header('Content-Type', 'application/json');
    }

    /**
     * @param $id
     * @param $data
     */
    public function update(Request $request)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param $id
     */
    public function delete(Request $request)
    {
        $roleId = $this->roleService->getRoleByName('admin')->getId();

        if ($this->roleService->userHasRole($request->user()->getId(), $roleId)) {
            return response($this->userService->delete($request->id), Response::HTTP_OK);
        }

        return response(
            [
                'success' => false,
                'message' => 'Insufficient permissions'
            ], Response::HTTP_FORBIDDEN
        )->header('Content-Type', 'application/json');
    }

}
