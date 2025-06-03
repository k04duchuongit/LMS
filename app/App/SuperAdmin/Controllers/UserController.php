<?php

namespace App\App\SuperAdmin\Controllers;

use App\App\SuperAdmin\Requests\FormCreateUser;
use Illuminate\Http\Request;
use App\Domain\User\Actions\ShowUserAction;

use App\App\SuperAdmin\ViewModels\UserViewModel;
use App\App\SuperAdmin\ViewModels\UserDetailViewModel;
use App\Domain\User\Actions\StoreUserAction;
use App\Domain\User\DTO\UserDto;

class UserController
{
    /**
     * Display a listing of the resource.
     */
    public function index(UserViewModel $userViewModel)
    {
        return view('supperadmin.client-v.manager-client', compact('userViewModel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supperadmin.client-v.add-client');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormCreateUser $FormCreateUser, StoreUserAction $storeUserAction)   //inject StoreUserAction để thực hiện lưu người dùng
    {
        $dto = new UserDto(...$FormCreateUser->validated());  // ... là toán tử giải nén sẽ làm bung mảng ra thành các tham số tương ứng
        $storeUserAction->execute($dto);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id, ShowUserAction $showUserAction)   //vì không thể inject UserDetailViewModel bởi nó cần tham số
    {
        $UserDetailViewModel = new UserDetailViewModel($id, $showUserAction);   // nên phải khởi tạo nó ở đây

        return view('supperadmin.client-v.detail-client', compact('UserDetailViewModel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
