<?php

namespace App\Domain\User\Actions;

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
        return $this->userRepository->getAll(); 
    }
}
