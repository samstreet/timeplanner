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

    public function create( Request $request );

    public function fetch( Request $request );

    public function update( Request $request );

    public function delete( Request $request );

    public function fetchAll( Request $request );

}