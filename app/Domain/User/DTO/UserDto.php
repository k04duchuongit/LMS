<?php

namespace App\Domain\User\DTO;

class UserDto
{
    public string $fullName;
    public string $email;
    public string $password;
    public string $number_phone;
    public ?string $role = null;

    public function __construct(string $fullName, string $email, string $number_phone, string $password, ?string $role = null)
    {
        $this->fullName = $fullName;
        $this->email = $email;
        $this->number_phone = $number_phone;
        $this->password = $password;
        $this->role = $role;
    }
}
