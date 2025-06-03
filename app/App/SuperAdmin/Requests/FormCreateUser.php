<?php

namespace App\App\SuperAdmin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormCreateUser extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'number_phone'=> 'required|string|max:25|unique:users,number_phone',
            'password' => 'required|string|min:8',
            'role' => 'nullable|string|in:admin,lecturer,student',
        ];
    }

    public function messages(): array
    {
        return [
            // fullName
            'fullName.required' => 'Họ và tên không được để trống.',
            'fullName.string' => 'Họ và tên phải là chuỗi ký tự.',
            'fullName.max' => 'Họ và tên không được vượt quá 255 ký tự.',

            // email
            'email.required' => 'Email không được để trống.',
            'email.email' => 'Email không đúng định dạng.',
            'email.max' => 'Email không được vượt quá 255 ký tự.',
            'email.unique' => 'Email đã được sử dụng.',

            // number_phone
            'number_phone.required' => 'Số điện thoại không được để trống.',
            'number_phone.string' => 'Số điện thoại phải là chuỗi ký tự.',
            'number_phone.max' => 'Số điện thoại không được vượt quá 25 ký tự.',
            'number_phone.unique' => 'Số điện thoại đã được sử dụng.',

            // password
            'password.required' => 'Mật khẩu không được để trống.',
            'password.string' => 'Mật khẩu phải là chuỗi ký tự.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',


            // role
            'role.string' => 'Vai trò phải là chuỗi ký tự.',
            'role.in' => 'Vai trò phải là một trong các giá trị: admin, lecturer, student.',
        ];
    }
}
