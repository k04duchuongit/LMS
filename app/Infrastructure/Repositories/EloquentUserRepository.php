<?php

namespace App\Infrastructure\Repositories;

use App\Domain\User\Repositories\UserRepositoryInterface;
use App\Infrastructure\Models\User;

class EloquentUserRepository implements UserRepositoryInterface
{
    public function getAll()
    {
        // Implementation for getting all users
        return User::all();
    }

    public function getUserById(int $id)
    {
        // Implementation for getting a user by ID
        return User::find($id);
    }

    public function createUser($data)
    {

        return User::create([
            'name' => $data->fullName,
            'email' => $data->email,
            'password' => bcrypt($data->password),
            'number_phone' => $data->number_phone,
            'role' => $data->role ?? null,
        ]);
    }

    public function updateUser(int $id, $data)
    {
        // Implementation for updating an existing user
        return null;
    }

    public function deleteUser(int $id)
    {
        // Implementation for deleting a user by ID
        return null;
    }
};
