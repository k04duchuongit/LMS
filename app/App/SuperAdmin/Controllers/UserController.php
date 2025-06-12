<?php

namespace App\App\SuperAdmin\Controllers;

use App\App\SuperAdmin\Requests\FormCreateUser;
use App\App\SuperAdmin\Requests\FormUpdateUser;
use Illuminate\Http\Request;
use App\Domain\User\Actions\ShowUserAction;
use App\App\SuperAdmin\ViewModels\UserViewModel;
use App\App\SuperAdmin\ViewModels\UserDetailViewModel;
use App\App\SuperAdmin\ViewModels\UserEditViewModel;
use App\Domain\User\Actions\ListUserAction;
use App\Domain\User\Actions\StoreUserAction;
use App\Domain\User\Actions\UpdateUserAction;
use App\Domain\User\DTO\UserCreateDto;
use App\Domain\User\DTO\UserEditDto;
use App\Domain\User\DTO\UserUpdateDto;

use function Laravel\Prompts\password;

class UserController
{
    /**
     * Display a listing of the resource.
     */
    public function index(ListUserAction $usersAction)
    {

        $users =  $usersAction->execute();                  //Users lúc này là 1 collection dto

        $usersViewModel = $users->map(function ($user) {    // chuyển Dto sang viewmodel để dùng phương thức của viewmodel
            return new UserViewModel($user);
        });

        return view('supperadmin.client-v.manager-client', compact('usersViewModel'));
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
    public function store(FormCreateUser $formCreateUser, StoreUserAction $storeUserAction)   //inject StoreUserAction để thực hiện lưu người dùng
    {
        $dto = new UserCreateDto(
            fullName: $formCreateUser->input('fullName'),
            email: $formCreateUser->input('email'),
            number_phone: $formCreateUser->input('number_phone'),
            role: $formCreateUser->input('role'),
            password: $formCreateUser->input('password'),
            avatar: $formCreateUser->file('avatar'),
        );

        $storeUserAction->execute($dto);
        return redirect()->route('admin.user.index')->with('success', 'Tạo người dùng thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id, ShowUserAction $showUserAction)
    {
        $user = $showUserAction->execute($id);
        $UserDetailViewModel = new UserDetailViewModel($user);  // khởi tạo ViewModel 

        return view('supperadmin.client-v.detail-client', compact('UserDetailViewModel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id, ShowUserAction $ShowUserAction)
    {
        $user = $ShowUserAction->execute($id);
        $UserEditViewModel = new UserEditViewModel($user);

        return view('supperadmin.client-v.edit-client', compact('UserEditViewModel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(int $id, FormUpdateUser $formCreateUser, UpdateUserAction $updateUserAction)
    {

        $dto = new UserUpdateDto(
            id: $id,
            fullName: $formCreateUser->input('fullName'),
            email: $formCreateUser->input('email'),
            number_phone: $formCreateUser->input('number_phone'),
            role: $formCreateUser->input('role'),
            avatar: $formCreateUser->file('avatar'),
            updated_at: now()
        );
        
        $userUpdateDto =  $updateUserAction->execute($dto);
        $UserEditViewModel =  new UserEditViewModel($userUpdateDto);

        return view('supperadmin.client-v.edit-client', compact('UserEditViewModel'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
