<?php

namespace App\Domain\User\DTO;

use App\Domain\User\Entities\UserEntity;

class UserUpdateDto
{
    public $id;
    public string $fullName;
    public string $email;
    public string $number_phone;
    public string $role;
    public $avatar = null;
    public $updated_at;

    public function __construct($id, string $fullName, string $email, string $number_phone, string $role, $avatar = null, $updated_at)
    {
        $this->id = $id;
        $this->fullName = $fullName;
        $this->email = $email;
        $this->number_phone = $number_phone;
        $this->role = $role;
        $this->avatar = $avatar;
        $this->updated_at = $updated_at;
    }

    public static function setDataDto(UserEntity $userEntity)
    {
        return new self(
            $userEntity->getId(),
            $userEntity->getFullName(),
            $userEntity->getEmail(),
            $userEntity->getNumberPhone(),
            $userEntity->getRole(),
            $userEntity->getAvatar(),
            $userEntity->getUpdatedAt(),
        );
    }
}
