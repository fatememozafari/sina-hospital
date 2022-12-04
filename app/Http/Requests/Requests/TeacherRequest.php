<?php

namespace App\Http\Requests\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>['required'],
            'family'=>['required'],
            'mobile'=>['required','min:11','max:12'],
            'email'=>['required'],
            'password'=>['required','min:8'],
            'password_confirmation'=>['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'فیلد نام اجباری است.',
            'family.required'=>'فیلد نام خانوادگی اجباری است.',
            'mobile.required'=>'فیلد شماره موبایل اجباری است.',
            'email.required'=>'فیلد ایمیل اجباری است.',
            'password.required'=>'فیلد رمز ورود اجباری است.',
            'password_confirmation.required'=>'فیلد تایید رمز ورود اجباری است.',
            'mobile.min'=>'فیلد  شماره موبایل باید حداقل 11 کاراکتر داشته باشد.',
            'password.min'=>'فیلد رمز ورود باید حداقل 8 کاراکتر داشته باشد.',
        ];
    }
}
