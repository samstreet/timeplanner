<?php

namespace App\Interfaces\Services;

interface AssignmentServiceInterface
{
    public function create($data);
    public function fetch($id);
    public function update($id, $data);
    public function delete($id);
}
