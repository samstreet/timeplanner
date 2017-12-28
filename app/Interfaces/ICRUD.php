<?php

namespace App\Interfaces;

/**
 * Interface ICRUD
 *
 * @author Sam Street
 */
interface ICRUD
{

    public function create($data);

    public function fetch($id);

    public function update($id, $data);

    public function delete($id);

}