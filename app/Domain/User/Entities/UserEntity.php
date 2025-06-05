<?php

namespace App\Domain\User\Entities;

final class UserEntity
{
    private ?string $id;
    private string $fullName;
    private string $email;
    private string $password;
    private string $numberPhone;
    private string $role;
    private ?string $image;
    private ?\DateTimeImmutable $createdAt;  // lúc mới tạo thì null, lúc lưu xong sẽ gán
    private ?\DateTimeImmutable $updatedAt;

    public function __construct(
        ?string $id = null,
        string $fullName,
        string $email,
        string $numberPhone,
        string $password,
        string $role,
        ?string $image = null,
        ?\DateTimeImmutable $createdAt = null,
        ?\DateTimeImmutable $updatedAt = null,

    ) {
        $this->id = $id;
        $this->fullName = $fullName;
        $this->email = $email;
        $this->numberPhone = $numberPhone;
        $this->password = $password;
        $this->role = $role;
        $this->image = $image;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    // Getters

    public function getId()
    {
        return $this->id;
    }

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

    public function getRole(): string
    {
        return $this->role;
    }
    public function getAvatar(): ?string
    {
        return $this->image;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    public function getUpdatedAt()
    {
        return $this->updatedAt;
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
    public function changeAvatar(?string $image): void
    {
        $this->image = $image;
    }
}
