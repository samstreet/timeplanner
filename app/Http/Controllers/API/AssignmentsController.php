<?php

namespace App\Http\Controllers\API;

use App\Interfaces\Services\AssignmentServiceInterface;
use App\Interfaces\ICRUD;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AssignmentsController extends Controller implements ICRUD
{

    private $service;

    function __construct(AssignmentServiceInterface $service)
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
     *
     * @return array
     */
    public function fetch($id)
    {
      return [];
    }

    public function fetchAll()
    {
        return [];
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
