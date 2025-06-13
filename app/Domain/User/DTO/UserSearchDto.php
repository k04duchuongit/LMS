<?php

namespace App\Domain\User\DTO;

use App\Domain\User\Entities\UserEntity;

class UserSearchDto
{
    public $nameUser;
    public $role;
    public function __construct($nameUser = null, $role = null)
    {
        $this->nameUser = $nameUser;
        $this->role = $role;
    }

}
