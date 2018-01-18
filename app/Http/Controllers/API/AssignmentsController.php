<?php

namespace App\Http\Controllers\API;

use App\Interfaces\Services\AssignmentServiceInterface;
use App\Interfaces\ICRUD;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AssignmentsController extends Controller implements ICRUD
{

    private $service;

    function __construct(AssignmentServiceInterface $service)
    {
        $this->service = $service;
    }

    public function create(Request $request)
    {
        // TODO: Implement create() method.
    }

    public function fetch(Request $request)
    {
        // TODO: Implement fetch() method.
    }

    public function update(Request $request)
    {
        // TODO: Implement update() method.
    }

    public function delete(Request $request)
    {
        // TODO: Implement delete() method.
    }


}
