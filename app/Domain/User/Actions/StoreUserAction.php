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
        $userEntity = new UserEntity(    // Tạo một đối tượng UserEntity
            $dto->fullName,
            $dto->email,
            $dto->password,
            $dto->number_phone,
            $dto->role
        );

        // Lưu người dùng thông qua repository
        return $this->userRepository->createUser($dto);
    }

}

?>