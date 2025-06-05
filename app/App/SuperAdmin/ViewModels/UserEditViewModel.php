<?php

namespace App\App\SuperAdmin\ViewModels;

use App\Domain\User\Actions\ShowUserAction;
use App\Domain\User\DTO\UserDetailDto;

class UserEditViewModel
{
    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function user()
    {
        return $this->user;
    }

    /////
    public function getId()
    {
        return $this->user->getId();
    }

    public function getAvatar()
    {
        return $this->user->getAvatar() ? asset($this->user->getAvatar()) : asset('storage/avatars/default-avatar.avif');
    }

    public function getName()
    {
        $current = old('fullName') ?? $this->user->getFullName();
        return $current;
    }
    public function getEmail()
    {
        $current = old('email') ?? $this->user->getEmail();
        return $current;
    }
    public function getNumberPhone()
    {
        $current = old('number_phone') ?? $this->user->getNumberPhone();
        return $current;
    }

    public function getRole($role = null)  // nhận role ở option hiện tại và so sánh với dữ liệu cũ nếu trùng => selected
    {
        if (!$role) {
            $role = old('role') ?? $this->user->getRole();  // nếu không có role thì lấy từ old hoặc từ dữ liệu cũ
        }

        $current = old('role') ?? $this->user->getRole();

        return $current === $role ? 'selected' : '';
    }
    public function getCreatedAt()
    {
        return $this->user->created_at->format('d/m/Y');
    }
}
