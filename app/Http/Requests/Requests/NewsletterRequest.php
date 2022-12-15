<?php

namespace App\Http\Requests\requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsletterRequest extends FormRequest
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
            'email'=>['required'],
            'user_id'=>['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'وارد کردن نام اجباری است.',
            'email.required'=>'وارد کردن ایمیل اجباری است.',
            'user_id.required'=>'برای عضویت ابتدا باید وارد سایت شوید',
        ];
    }
}
