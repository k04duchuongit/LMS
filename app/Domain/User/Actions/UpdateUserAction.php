<?php

namespace App\Domain\User\Actions;

use App\Domain\User\DTO\UserUpdateDto;
use App\Domain\User\Entities\UserEntity;
use App\Domain\User\Entities\UserEntityUpdate;
use App\Domain\User\Repositories\UserRepositoryInterface;
use App\Infrastructure\Support\FileUploadService;

class UpdateUserAction
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

        $user = $this->userRepository->getUserById($dto->id);   //đây là 1 entity của đối tượng

        //THAO TAC THÊM & XÓA ẢNH
        $avatarPath = $user->getAvatar();           //ảnh cũ
        if ($dto->avatar) {                         //nếu có ảnh mới
            if ($avatarPath) {
                $this->fileUploadService->deleteAvatar($avatarPath);    // xóa ảnh cũ
            }
            $avatarPath = $this->fileUploadService->uploadsImageAvatar($dto->avatar);  // thêm ảnh mới vào kho và trả về đường dẫn stringstring

            $dto->avatar = $avatarPath; // cập nhật avatar trong dto
        }

        $userEntity = $this->userRepository->updateUser($dto->id, $dto); // thực hiện cập nhật & trả về entity user
        return UserUpdateDto::setDataDto($userEntity);

        //END
    }
}
