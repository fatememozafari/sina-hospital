<?php

namespace App\Http\Requests\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'title'=>['required'],
            'message'=>['required'],
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'عنوان پیام اجباری است.',
            'name.required'=>'نام و نام خانوادگی اجباری است.',
            'message.required'=>'متن پیام اجباری است.',
        ];
    }
}
