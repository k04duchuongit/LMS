<?php

namespace App\Domain\User\Actions;

use App\Domain\User\Entities\UserEntity;
use App\Domain\User\Entities\UserEntityEdit;
use App\Domain\User\Repositories\UserRepositoryInterface;
use App\Infrastructure\Support\FileUploadService;

class DeleteUserAction
{
    protected $userRepository;
    protected $fileUploadService;
    public function __construct(UserRepositoryInterface $userRepository, FileUploadService $fileUploadService)
    {
        $this->userRepository = $userRepository;
        $this->fileUploadService = $fileUploadService;
    }


    public function execute(int $id)
    {
        $pathAvatar =  $this->userRepository->getUserById($id)->getAvatar();
        $this->fileUploadService->deleteAvatar($pathAvatar);
        $this->userRepository->deleteUser($id);
    }
}
