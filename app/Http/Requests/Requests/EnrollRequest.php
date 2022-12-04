<?php

namespace App\Http\Requests\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnrollRequest extends FormRequest
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
            'user_id'=>['required'],
            'course_id'=>['required'],
        ];
    }

    public function messages()
    {
        return [
            'user_id.required'=>'فیلد نام کاربر اجباری است.',
            'course_id.required'=>'فیلد نام دوره اجباری است.',
        ];
    }
}
