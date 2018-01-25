<?php
/**
 * @author Sam Street
 */

namespace App\Http\Controllers\API;

use App\Interfaces\ICRUD;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ToDosController implements ICRUD
{
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

    public function fetchAll( Request $request )
    {
        return response(
            [
                'success' => true,
                'data' => []
            ], Response::HTTP_OK
        )->header('Content-Type', 'application/json');
    }


}