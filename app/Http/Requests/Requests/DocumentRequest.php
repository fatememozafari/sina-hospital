<?php

namespace App\Http\Requests\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentRequest extends FormRequest
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
            'start_at'=>['required'],
            'file'=>['required','mimes:png,jpg'],
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'فیلد عنوان دوره اجباری است.',
            'slug.required'=>'فیلد نام تخصصی دوره اجباری است.',
            'type.required'=>'فیلد نوع دوره اجباری است.',
            'file.required'=>'فیلد آپلود فایل اجباری است.',
            'start_at.required'=>'فیلد تاریخ برگزاری اجباری است.',
            'file.mimes'=>'فقط فایل با فرمت jpg و png مجاز است.',

        ];
    }
}
