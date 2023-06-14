<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\requests\NewsletterRequest;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.newsletter');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $inputs=$request->all();
        $inputs['user_id']=Auth::id();

        $data=Validator::make( $inputs,
            [
            'name'=>['required'],
            'email'=>['required'],
            'user_id'=>['required'],
        ],[
            'name.required'=>'وارد کردن نام اجباری است.',
            'email.required'=>'وارد کردن ایمیل اجباری است.',
            'user_id.required'=>'برای عضویت ابتدا باید وارد سایت شوید',
        ]);

        Newsletter::query()->create([$data]);
        return back()->with('success','عضویت شما در خبرنامه ثبت شد.');
    }
}
