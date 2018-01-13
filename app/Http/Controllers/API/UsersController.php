<?php

namespace App\Http\Controllers\API;

use App\Interfaces\Services\UserServiceInterface;
use App\Interfaces\ICRUD;
use App\Http\Controllers\Controller;

class UsersController extends Controller implements ICRUD
{

    /**
     * @var \App\Service\UserService
     */
    private $service;

    function __construct(UserServiceInterface $service)
    {
        $this->service = $service;
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
        return $this->service->getAllUsers();
    }

    /**
     * @param $id
     *
     * @return array
     */
    public function fetch($id)
    {
        $user = $this->service->getUserById($id);
        if( !is_null($user) ){
            return $user->jsonSerialize();
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
