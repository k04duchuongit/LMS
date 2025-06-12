<?php

namespace App\Domain\User\Actions;

use App\Domain\User\Entities\UserEntity;
use App\Domain\User\Repositories\UserRepositoryInterface;
use App\Infrastructure\Support\FileUploadService;

class StoreUserAction
{
    protected $userRepository;
    protected $fileUploadService;
    public function __construct(UserRepositoryInterface $userRepository, FileUploadService $fileUploadService)
    {
        $this->userRepository = $userRepository;
        $this->fileUploadService =  $fileUploadService;
    }

    public function execute($dto)
    {

        if ($dto->avatar) {                         //nếu có ảnh mới
            $avatarPath = $this->fileUploadService->uploadsImageAvatar($dto->avatar);  // thêm ảnh mới vào kho và trả về đường dẫn string
            $dto->avatar = $avatarPath; // cập nhật avatar trong dto
        }

        $userEntity =  $this->userRepository->createUser($dto);
        return $userEntity;
    }
}
