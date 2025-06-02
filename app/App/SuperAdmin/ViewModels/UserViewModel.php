<?php

namespace App\App\SuperAdmin\ViewModels;
use App\Domain\User\Actions\ListUserAction;
use Illuminate\Support\Collection;

class UserViewModel
{
    protected Collection $users;  // khai báo thuộc tính users là một Collection
    public function __construct(ListUserAction $users)  
    {
        $this->users = collect($users->execute());  // collect tạo 1 collection từ giá trị truyền vào để đảm bảo nó là 1 Collection
    }

    public function users(): Collection
    {
        return $this->users;
    }
}
