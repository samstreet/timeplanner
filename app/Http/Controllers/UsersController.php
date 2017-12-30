<?php

namespace App\Http\Controllers;

use App\Entity\User;
use App\Service\UserService;
use Illuminate\Http\Request;
use App\Interfaces\ICRUD;

class UsersController extends Controller implements ICRUD
{

    private $service;

    function __construct(UserService $service)
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
     * @param $id
     */
    public function fetch($id)
    {
        $this->service->getUserById($id);
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
