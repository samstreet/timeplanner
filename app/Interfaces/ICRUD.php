<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

/**
 * Interface ICRUD
 *
 * @author Sam Street
 */
interface ICRUD
{

    public function create($data);

    public function fetch(Request $request);

    public function update($id, $data);

    public function delete($id);

}