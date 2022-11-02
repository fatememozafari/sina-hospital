<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.contact');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $rules=[
            'name'=>['required'],
            'title'=>['required'],
            'message'=>['required'],

        ];
        $request->validate([
            'name'=>['required'],
            'title'=>['required'],
            'message'=>['required'],
        ],[
            'required'=>'فیلد :attribute اجباری است.',
        ],[
            'name'=>'نام و نام خانوادگی',
            'title'=>'عنوان پیام',
            'message'=>'متن پیام',

        ]);
        $validation= Validator::make($data,$rules);
        if ($validation->fails()){
            return back()->withErrors($validation);
        }else{
            $inputs=$request->only(['name','title','message','file','user_id']);
            $inputs['user_id']=Auth::id();
            if ($request->file('file'))
                $inputs['file'] = $this->uploadMedia($request->file('file'));

            Contact::create($inputs);
            return back()->with('success',' پیام شما با موفقیت ارسال شد.');
        }

    }



}
