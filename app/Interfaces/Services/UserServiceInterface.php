<?php

namespace App\Interfaces\Services;

interface UserServiceInterface
{
    public function create($data);
    public function fetch($id);
    public function update($id, $data);
    public function delete($id);
    public function getAllUsers();
    public function findByEmail($email);
}
