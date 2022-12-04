<?php

namespace App\Http\Requests\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'question'=>['required'],
            'answer'=>['required'],
        ];
    }

    public function messages()
    {
        return [
            'question.required'=>'فیلد سوال اجباری است.',
            'answer.required'=>'فیلد پاسخ اجباری است.',

        ];
    }
}
