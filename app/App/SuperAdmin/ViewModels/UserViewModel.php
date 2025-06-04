<?php

namespace App\App\SuperAdmin\ViewModels;

use App\Domain\User\Actions\ListUserAction;
use App\Domain\User\DTO\UserListDto;
use Illuminate\Support\Collection;

class UserViewModel
{
    protected Collection $users;  // khai báo thuộc tính users là một Collection
    public function __construct($users)
    {

        $this->users = $users->map(function ($user) {
            return new UserListDto(
                $user->getFullName(),
                $user->getEmail(),
                $user->getNumberPhone(),
                $user->getRole(),
                $user->getAvatar()
            );
        });
    }

    public function users(): Collection
    {
        return $this->users;
    }
}
