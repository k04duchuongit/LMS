<?php

namespace App\App\SuperAdmin\ViewModels;

use App\Domain\User\Actions\ShowUserAction;
use App\Domain\User\DTO\UserDetailDto;

class UserDetailViewModel
{
    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function user()   // Đây trả về đối tượng entity
    {
        return $this->user;
    }


    // Thực hiện lấy dữ liệu từ entity ra ngoài
    public function getId(): string
    {
        return $this->user->id;
    }

    public function getAvatar(): ?string
    {
        return asset($this->user->avatar ?? 'storage/avatars/macdinh.png'); // chuyển từ path trong storage sang URL đầy đủ
    }
    public function getFullName(): string
    {
        return $this->user->fullName;
    }
    public function getEmail(): string
    {
        return $this->user->email;
    }

    public function getNumberPhone(): string
    {
        return $this->user->number_phone;
    }

    public function getRole(): ?string
    {
        return $this->user->role;
    }
    public function getCreatedAt(): string
    {
        return \Carbon\Carbon::parse($this->user->created_at)->format('d/m/Y H:i');
    }
}
