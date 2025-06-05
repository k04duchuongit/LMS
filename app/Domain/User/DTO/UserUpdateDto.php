<?php

namespace App\Domain\User\DTO;

class UserUpdateDto
{
    public int $id;
    public string $fullName;
    public string $email;
    public string $number_phone;
    public ?string $role = null;
    public $avatar = null;
    public ?string $created_at = null;

    public function __construct(int $id,string $fullName, string $email, string $number_phone, ?string $role = null, $avatar = null)
    {
        $this->id = $id;
        $this->fullName = $fullName;
        $this->email = $email;
        $this->number_phone = $number_phone;
        $this->role = $role;
        $this->avatar = $avatar;
    }
}
