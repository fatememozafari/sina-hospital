<?php

namespace App\Http\Controllers\admin;

use App\Filters\ContactFilter;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contacts = Contact::query()->with(['files'])->orderBy('id', 'DESC');

        //search
//        if ($request->get('q'))
//            $contact = $contact->where('name', 'like', '%' . $request->get('q') . '%')
//                ->orWhere('title', 'like', '%' . $request->get('q') . '%')
//                ->orWhere('message', 'like', '%' . $request->get('q') . '%')
//                ->orWhere('created_at', 'like', '%' . $request->get('q') . '%');
//        $contact = $contact->get();
        $contacts = $contacts->filter(new ContactFilter())->get();

        return view('admin.contacts.index', compact('contacts','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contacts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->only(['name', 'title', 'message', 'file','user_id']);
        if ($request->file('file')) {
            $inputs['file'] = $this->uploadMedia($request->file('file'));
        }
      Contact::create($inputs);
      return redirect('/admin/contacts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact=Contact::query()->find($id);
        return view('admin.contacts.show',compact('contact'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inputs=Contact::query()->where('id',$id)->first();
        return view('admin.contacts.edit',compact('inputs'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$request->only('name','title','message','file');
        if ($request->file('file')){
            $data['file'] = $this->uploadMedia($request->file('file'));
        }
        Contact::query()->where('id',$id)->update($data);
        return redirect('/admin/contacts');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::query()->where('id',$id)->delete();
        return back();
    }
}
