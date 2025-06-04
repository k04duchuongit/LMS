<?php
namespace App\Domain\User\Entities;

final class UserEntity
{
    private string $fullName;
    private string $email;
    private string $password;
    private string $numberPhone;
    private ?string $role;
    private ?string $avatar;

    public function __construct(
        string $fullName,
        string $email,
        string $numberPhone,
        string $password,
        string $role,
        ?string $avatar = null

    ) {
        $this->fullName = $fullName;
        $this->email = $email;
        $this->numberPhone = $numberPhone;
        $this->password = $password;
        $this->role = $role;
        $this->avatar = $avatar;
    }

    // Getters
    public function getFullName(): string
    {
        return $this->fullName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getNumberPhone(): string
    {
        return $this->numberPhone;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    // Setters hoặc methods cập nhật
    public function changeFullName(string $fullName): void
    {
        $this->fullName = $fullName;
    }

    public function changePassword(string $password): void
    {
        // Ở đây bạn có thể thêm logic hash password nếu muốn
        $this->password = $password;
    }

    public function changeRole(?string $role): void
    {
        $this->role = $role;
    }

    public function changeNumberPhone(string $numberPhone): void
    {
        $this->numberPhone = $numberPhone;
    }
    public function changeAvatar(?string $avatar): void
    {
        $this->avatar = $avatar;
    }
}
