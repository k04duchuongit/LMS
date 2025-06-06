<?php

namespace App\Domain\User\Actions;

use App\Domain\User\Entities\UserEntity;
use App\Domain\User\Entities\UserEntityUpdate;
use App\Domain\User\Repositories\UserRepositoryInterface;

class UpdateUserAction
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function execute($dto) : bool
    {
        // Chuyển đổi DTO thành Entity
        $userEntity = new UserEntityUpdate(
            $dto->id,
            $dto->fullName,
            $dto->email,
            $dto->number_phone,
            $dto->role,
            $dto->avatar ?? null,
            $dto->updated_at ? new \DateTimeImmutable($dto->updated_at) : null
        );
     
        return $this->userRepository->updateUser($userEntity->getId(), $userEntity);
    }
}
