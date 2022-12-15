<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\requests\NewsletterRequest;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsletterRequest $request)
    {
        $inputs=$request->only(['email','user_id','name']);
        $inputs['user_id']=Auth::id();
        Newsletter::create($inputs);
        return back()->with('success','عضویت شما در خبرنامه ثبت شد.');
    }
}
