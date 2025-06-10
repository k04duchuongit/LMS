<?php

namespace App\Domain\User\Actions;

use App\Domain\User\DTO\UserListDto;
use App\Domain\User\Repositories\UserRepositoryInterface;

class ListUserAction
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Execute the action to list all users.
     *
     */
    public function execute()
    {
        $UsersEntity = $this->userRepository->getAll();  // lúc này là 1 mảng chứa các collection của User entity
        $UsersDto = $UsersEntity->map(function ($user) { // lấy dữ liệu từ entity nạp vào dto để đẩy sang App
            return UserListDto::setDataDto($user);
        });

        return $UsersDto;
    }
}
