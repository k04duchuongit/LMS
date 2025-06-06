<?php

namespace App\Infrastructure\Repositories;

use App\Domain\User\Entities\UserEntity;
use App\Domain\User\Repositories\UserRepositoryInterface;
use App\Infrastructure\Models\User;
use Illuminate\Support\Facades\Storage;

use function PHPSTORM_META\map;

class EloquentUserRepository implements UserRepositoryInterface
{
    public function getAll()
    {
        // Implementation for getting all users
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
            $user->created_at->toImmutable(),  // Chuyển đổi sang định dạng chuỗi
            $user->updated_at->toImmutable()
        );

        return $user;
    }

    public function createUser($data)
    {
        if ($data->avatar) {
            // Lấy phần đuôi
            $extension = $data->avatar->getClientOriginalExtension();

            // Tạo tên file mới, ví dụ: user_123456789.jpg
            $newFileName = $data->fullName . '_' . time() . '.' . $extension;

            // Lưu file với tên mới vào thư mục avatars trong disk 'public'
            $filePath = $data->avatar->storeAs('avatars', $newFileName, 'public');

            // Lưu đường dẫn file vào biến (đường dẫn dùng trong view là dạng 'storage/avatars/xxx.jpg')
            $data->avatar = 'storage/' . $filePath;
        }

        return User::create([
            'name' => $data->fullName,
            'email' => $data->email,
            'password' => bcrypt($data->password),
            'number_phone' => $data->number_phone,
            'image' => $data->avatar ?? null,
            'role' => $data->role ?? null,
        ]);
    }

    public function updateUser(int $id, $entity)
    {
        $user = User::findOrFail($id);

        $user->full_name = $entity->getFullName();
        $user->email = $entity->getEmail();
        $user->number_phone = $entity->getNumberPhone();
        $user->role = $entity->getRole();


        if ($entity->getAvatar()) {
            if ($user->avatar && Storage::disk('public')->exists(str_replace('storage/', '', $user->avatar))) {
                Storage::disk('public')->delete(str_replace('storage/', '', $user->avatar));
            }

            //cho ảnh vào kho
            $extension = $entity->getAvatar()->getClientOriginalExtension();
            $newFileName = $entity->getFullName() . '_' . time() . '.' . $extension;
            $filePath = $entity->getAvatar()->storeAs('avatars', $newFileName, 'public');
            $user->avatar = 'storage/' . $filePath;
            //xóa ảnh cũ
        }

        return $user->save();
    }

    public function deleteUser(int $id)
    {
        // Implementation for deleting a user by ID
        return null;
    }
};
