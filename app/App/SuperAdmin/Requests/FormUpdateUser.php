<?php

namespace App\App\SuperAdmin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormUpdateUser extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number_phone' => 'required|string|max:25|',
            'role' => 'nullable|string|in:admin,lecturer,student',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:5120'
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
 

            // number_phone
            'number_phone.required' => 'Số điện thoại không được để trống.',
            'number_phone.string' => 'Số điện thoại phải là chuỗi ký tự.',
            'number_phone.max' => 'Số điện thoại không được vượt quá 25 ký tự.',
     
            // role
            'role.string' => 'Vai trò phải là chuỗi ký tự.',
            'role.in' => 'Vai trò phải là một trong các giá trị: admin, lecturer, student.',

            // image
            'avatar.image' => 'Tệp tải lên phải là hình ảnh.',
            'avatar.mimes' => 'Hình ảnh phải có định dạng: jpeg, png, jpg, gif.',
            'avatar.max' => 'Kích thước hình ảnh không được vượt quá 5120 kilobytes.',
        ];
    }
}
