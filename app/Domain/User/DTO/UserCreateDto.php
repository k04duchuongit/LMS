<?php

namespace App\Domain\User\DTO;

class UserCreateDto
{

    public string $fullName;
    public string $email;
    public string $number_phone;
    public string $password;
    public ?string $role = null;
    public $avatar = null;
    public $created_at = null;

    public function __construct(string $fullName, string $email, string $number_phone, string $password, ?string $role = null, $avatar = null, $created_at = null)
    {
        $this->fullName = $fullName;
        $this->email = $email;
        $this->number_phone = $number_phone;
        $this->password = $password;
        $this->role = $role;
        $this->avatar = $avatar;
        $this->created_at = $created_at;
    }

    
}
