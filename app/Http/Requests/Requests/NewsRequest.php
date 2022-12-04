<?php

namespace App\Http\Requests\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title'=>['required'],
            'body'=>['required'],
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'فیلد عنوان اجباری است.',
            'body.required'=>'فیلد محتوای خبر اجباری است.',
        ];
    }
}
