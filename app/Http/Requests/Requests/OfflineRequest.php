<?php

namespace App\Http\Requests\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfflineRequest extends FormRequest
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
            'slug'=>['required'],
            'type'=>['required'],
            'file'=>['required','mimes:pdf,mp3,mp4,mkv,docs'],
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'فیلد عنوان دوره اجباری است.',
            'slug.required'=>'فیلد عنوان تخصصی دوره اجباری است.',
            'type.required'=>'فیلد نوع دوره اجباری است.',
            'file.required'=>'فیلد آپلود فایل اجباری است.',
            'file.mimes'=>'فقط فایل با فرمت pdf,mp3,mp4,mkv مجاز است.'
        ];
    }
}
