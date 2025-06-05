<?php

namespace App\Domain\User\DTO;

class UserDetailDto
{
    public $id;
    public string $fullName;
    public string $email;
    public string $number_phone;
    public $role = null;
    public $avatar = null;
    public string $created_at;

    public function __construct($id, string $fullName, string $email, string $number_phone, ?string $role = null, $avatar = null, $created_at)
    {
        $this->id = $id;
        $this->fullName = $fullName;
        $this->email = $email;
        $this->number_phone = $number_phone;
        $this->role = $role;
        $this->avatar = $avatar;
        $this->created_at = $created_at;
    }
}
