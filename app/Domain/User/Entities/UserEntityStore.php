<?php

namespace App\Domain\User\Entities;

final class UserEntityStore
{
    private string $id;
    private string $fullName;
    private string $email;
    private string $numberPhone;
    private string $role;
    private ?string $image;
    private \DateTimeImmutable $updatedAt;

    public function __construct(
        string $id,
        string $fullName,
        string $email,
        string $numberPhone,
        string $role,
        ?string $image = null,
        ?\DateTimeImmutable $updatedAt,

    ) {
        $this->id = $id;
        $this->fullName = $fullName;
        $this->email = $email;
        $this->numberPhone = $numberPhone;
        $this->role = $role;
        $this->image = $image;
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


    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    // Setters hoặc methods cập nhật
    public function changeFullName(string $fullName): void
    {
        $this->fullName = $fullName;
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
