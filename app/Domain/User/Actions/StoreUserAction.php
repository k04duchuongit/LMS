<?php

namespace App\Domain\User\Actions;

use App\Domain\User\Entities\UserEntity;
use App\Domain\User\Repositories\UserRepositoryInterface;

class StoreUserAction
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute($dto)
    {
        // Chuyển đổi DTO thành Entity
        $userEntity = new UserEntity(
            null,                         // id lúc tạo mới chưa có
            $dto->fullName,
            $dto->email,
            $dto->number_phone,
            $dto->password,
            $dto->role,
            $dto->avatar ?? null,         // ảnh có thể null
            null,                         // createdAt lúc tạo mới null
            null                          // updatedAt lúc tạo mới null
        );


        // Lưu người dùng thông qua repository
        return $this->userRepository->createUser($userEntity);
    }
}
