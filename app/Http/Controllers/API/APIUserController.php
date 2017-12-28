<?php
/**
 * @author Sam Street
 */

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Interfaces\ICRUD;

/**
 * Class UserController
 *
 * @package App\Http\Controllers\API
 */
class APIUserController extends Controller implements ICRUD
{

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
        // TODO: Implement fetch() method.
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