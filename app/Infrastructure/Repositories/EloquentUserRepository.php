<?php

namespace App\Infrastructure\Repositories;

use App\Domain\User\Entities\UserEntity;
use App\Domain\User\Repositories\UserRepositoryInterface;
use App\Infrastructure\Models\User;
use App\Infrastructure\Support\PaginatorTransformer;
use Illuminate\Support\Facades\Storage;

use function PHPSTORM_META\map;

class EloquentUserRepository implements UserRepositoryInterface
{
    public function getAll()
    {

        $users =  User::all();

        $users =  $users->map(function ($user) {   // Sử dụng map để chuyển đổi từng user thành UserEntity => trả về mảng users là 1 tập collection của UserEntity
            return new UserEntity(
                $user->id,
                $user->name,
                $user->email,
                $user->number_phone,
                $user->password,
                $user->role,
                $user->image,
                $user->created_at->toImmutable(),
                $user->updated_at->toImmutable()
            );
        });

        return $users;  // trả về danh sách người dùng
    }
    public function paginate($perPage, $dtoSearch)
    {
        $query = User::query();

        if ($dtoSearch->nameUser) {
            $query->where('name', 'like', '%' . $dtoSearch->nameUser . '%');
        }
        if ($dtoSearch->role) {
            $query->where('role', '=',  $dtoSearch->role);
        }

        $paginator = $query->paginate($perPage); // paginator ban đầu chứa User model

        // Hàm chuyển đổi từ User model sang UserEntity
        $convertToEntity = function ($user) {
            return new UserEntity(
                $user->id,
                $user->name,
                $user->email,
                $user->number_phone,
                $user->password,
                $user->role,
                $user->image,
                $user->created_at->toImmutable(),
                $user->updated_at->toImmutable()
            );
        };

        // Dùng class hỗ trợ để map toàn bộ collection bên trong paginator nhưng vẫn giữ vỏ là LengthAwarePaginator 
        return PaginatorTransformer::transform($paginator, $convertToEntity);
    }


    public function getUserById(int $id)
    {
        $user = User::find($id);

        $user = new UserEntity(
            $user->id,
            $user->name,
            $user->email,
            $user->number_phone,
            $user->password,
            $user->role,
            $user->image,
            $user->created_at->toImmutable(),
            $user->updated_at->toImmutable()
        );

        return $user;
    }

    public function createUser($dto)
    {
        $user = new User();

        $user->name = $dto->fullName;
        $user->email = $dto->email;
        $user->number_phone = $dto->number_phone;
        $user->image = $dto->avatar;
        $user->role = $dto->role;
        $user->password = bcrypt($dto->password);
        $user->created_at =  $dto->created_at;
        $user->save();

        return new UserEntity(
            $user->id,
            $user->name,
            $user->email,
            $user->number_phone,
            $user->password,
            $user->role,
            $user->image,
            $user->created_at->toImmutable(),
            $user->updated_at->toImmutable()
        );
    }

    public function updateUser(int $id, $dto)
    {
        $user = User::findOrFail($id);

        $user->name = $dto->fullName;
        $user->email = $dto->email;
        $user->number_phone = $dto->number_phone;
        $user->image = $dto->avatar;
        $user->role = $dto->role;
        $user->updated_at = $dto->updated_at;
        $user->save();

        return new UserEntity(
            $user->id,
            $user->name,
            $user->email,
            $user->number_phone,
            $user->password,
            $user->role,
            $user->image,
            $user->created_at->toImmutable(),
            $user->updated_at->toImmutable()
        );
    }

    public function deleteUser(int $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }
};
