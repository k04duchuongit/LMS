<?php

namespace App\Domain\User\Repositories;

interface UserRepositoryInterface
{

    public function getAll();


    public function getUserById(int $id);


    public function createUser($data);


    public function updateUser(int $id, $data);

    public function deleteUser(int $id);
}
