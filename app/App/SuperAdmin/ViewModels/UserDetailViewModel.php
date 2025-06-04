<?php

namespace App\App\SuperAdmin\ViewModels;

use App\Domain\User\Actions\ShowUserAction;

class UserDetailViewModel
{
    protected $user;

    public function __construct(int $id, ShowUserAction $showUserAction)
    {
        $this->user = $showUserAction->execute($id);
    }

    public function user()
    {
        return $this->user;
    }

    public function getID(){
        return $this->user->id;
    }
    public function getAvatar()
    {
        return $this->user->image ? asset($this->user->image) : asset('storage/avatars/default-avatar.avif');
    }

    public function getName()
    {
        $current = old('fullName') ?? $this->user->name;
        return $current;
    }
    public function getEmail()
    {
        $current = old('email') ?? $this->user->email;
        return $current;
    }
    public function getNumberPhone()
    {
        $current = old('number_phone') ?? $this->user->number_phone;
        return $current;
    }

    public function getRole($role = null)  // nhận role ở option hiện tại và so sánh với dữ liệu cũ nếu trùng => selected
    {
        if(!$role) {
            $role = old('role') ?? $this->user->role;  // nếu không có role thì lấy từ old hoặc từ dữ liệu cũ
        }

        $current = old('role') ?? $this->user->role;

        return $current === $role ? 'selected' : '';
    }
    public function getCreatedAt()
    {
        return $this->user->created_at->format('d/m/Y');
    }
}
