<?php

namespace App\Domain\User\Actions;

use App\Domain\User\DTO\UserDetailDto;
use App\Domain\User\Repositories\UserRepositoryInterface;

class ShowUserAction
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Execute the action to get user details by ID.
     *
     * @param string $id
     * @return mixed
     */

    public function execute(int $id)
    {
        $user = $this->userRepository->getUserById($id);

        return $user = UserDetailDto::setDataDto($user);
    }
}
