<?php

namespace App\Http\Controllers\front;

use App\Constants\Constant;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ContactController extends BaseController
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $inputs = $request->only(['name', 'title', 'message', 'user_id']);
        $inputs['user_id'] = Auth::id();
        $contacts = Contact::create($inputs);

        if ($request->file('file')) {
            $contacts->files()->create([
                'name' => $this->uploadFile(request('name'), Constant::CONTACT_FILE_UPLOAD_PATH),

            ]);
        }

        return back()->with('success', ' پیام شما با موفقیت ارسال شد.');


    }


}
