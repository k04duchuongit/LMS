<?php
namespace App\Domain\User\Entities;

class UserEntity
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
        $this->password = $password;
        $this->number_phone = $number_phone;
        $this->role = $role;
    }

}
?>