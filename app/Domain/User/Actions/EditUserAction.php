<?php

namespace App\Domain\User\Actions;

use App\Domain\User\Entities\UserEntity;
use App\Domain\User\Entities\UserEntityEdit;
use App\Domain\User\Repositories\UserRepositoryInterface;

class EditUserAction
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function execute() {}
}
