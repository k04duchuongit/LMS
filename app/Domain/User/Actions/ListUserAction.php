<?php

namespace App\Domain\User\Actions;

use App\Domain\User\DTO\UserListDto;
use App\Domain\User\Repositories\UserRepositoryInterface;
use App\Infrastructure\Support\PaginatorTransformer;

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
    public function execute($perPage,$dtoSearch)
    {
        $UsersEntity = $this->userRepository->paginate($perPage,$dtoSearch);

        $convertToDto = function ($user) { // lấy dữ liệu từ entity nạp vào dto để đẩy sang App
            return UserListDto::setDataDto($user);
        };
        $usersDto = PaginatorTransformer::transform($UsersEntity, $convertToDto);
        return $usersDto;
    }
}
