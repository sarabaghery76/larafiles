<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'full_name'  => 'required',
            'email'      => 'required|email',
            'password'   => 'required|min:6|max:12'
        ];
        if(request()->route('user_id') && intval(request()->route('user_id')) > 0){
            unset($rules['password']);
        }
        return $rules;
    }



    public function messages()
    {
        return [
            'full_name.required' => 'لطفا نام کامل را وارد کنید.',
            'email.required'    => 'وارد کردن ایمیل الزامی می باشد.',
            'email.email'    => 'ایمیل وارد شده معتبر نمی باشد.',
            'password.required'    => 'وارد کردن کلمه عبور الزامی می باشد.',
            'password.min'    => 'کلمه عبور حداقل 6 کاراکتر نیاز دارد.',
            'password.max'    => 'کلمه عبور حداکثر باید 12 کاراکتر باشد.'
        ];
    }
}
