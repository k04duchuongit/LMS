<?php

namespace App\App\SuperAdmin\Controllers;

use App\App\SuperAdmin\Requests\FormCreateUser;
use Illuminate\Http\Request;
use App\Domain\User\Actions\ShowUserAction;

use App\App\SuperAdmin\ViewModels\UserViewModel;
use App\App\SuperAdmin\ViewModels\UserDetailViewModel;
use App\Domain\User\Actions\ListUserAction;
use App\Domain\User\Actions\StoreUserAction;
use App\Domain\User\DTO\UserListDto;

class UserController
{
    /**
     * Display a listing of the resource.
     */
    public function index(ListUserAction $usersAction)
    {
        //Users lúc này là 1 collection của User entity
        $users =  $usersAction->execute();

        $userViewModel = new UserViewModel($users);  // khởi tạo ViewModel với danh sách người dùng
       dd($userViewModel->users());


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
    public function store(FormCreateUser $formCreateUser, StoreUserAction $storeUserAction)   //inject StoreUserAction để thực hiện lưu người dùng
    {
        $dto = new UserListDto(
            fullName: $formCreateUser->input('fullName'),
            email: $formCreateUser->input('email'),
            number_phone: $formCreateUser->input('number_phone'),
            role: $formCreateUser->input('role'),
            avatar: $formCreateUser->file('avatar'),
        );

        $storeUserAction->execute($dto);
        return redirect()->route('admin.user.index')->with('success', 'Tạo người dùng thành công');
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
    public function edit(int $id, ShowUserAction $showUserAction)
    {
        $UserDetailViewModel = new UserDetailViewModel($id, $showUserAction);

        return view('supperadmin.client-v.edit-client', compact('UserDetailViewModel'));
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
