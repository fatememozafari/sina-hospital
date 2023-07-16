<?php

namespace App\Http\Controllers\admin\Notify;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\CourseRequest;
use App\Models\Notify\Email;
use App\Models\Notify\EmailFile;
use App\Models\Notify\SMS;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index()
    {
        $email=Email::query()->get();
        return view('admin.notify.email.index',compact('email'));
    }


    public function create()
    {
        return view('admin.notify.email.create');

    }


    public function store(Request $request)
    {
        $email=$request->all();
        $email['status'] = 1;
        $result=Email::create($email);

        if ($request->hasFile('files')){
            $files=$request->file('files');
            foreach ($files as $file){
                $this->uploadEmailFile($request,$file,$result);
            }
        }


        if ($result){
            return redirect()->route('admin.email.index')->with('success','پیام جدید با موفقیت ثبت شد.');
        } else{
            return back()->withErrors($this->validate());
        }


    }

    public function show($id)
    {
        $email=Email::query()->find($id);
        return view('admin.notify.email.show',compact('email'));

    }


    public function edit($id)
    {
        $email=Email::query()->where('id',$id)->first();
        return view('admin.notify.email.edit',compact('email'));

    }


    public function update(Request $request, $id)
    {
        $data=$request->all();
       $result=  Email::query()->where('id',$id)->update($data);

        if ($request->hasFile('files')){
            $files=$request->file('files');
            foreach ($files as $file){
              $this->uploadEmailFile($request,$file,$result);
            }
        }
        return redirect()->route('admin.email.index')->with('success','با موفقیت ویرایش شد.');

    }


    public function destroy($id)
    {
        Email::query()->where('id',$id)->delete();
        return back();
    }

    private function uploadEmailFile($request, $file, $result)
    {
        $fileName=time().'_'.$file->getClientOriginalName();
        $request['status']= 1 ;
        $request['public_mail_id']= $result->id ;
        $request['file_type'] = $file->extension();
        $request['file_size'] = $file->getSize();
        $request['file_path']=$file->move('uploads/emailFiles/',$fileName);
        EmailFile::create($request->all());
    }

    public function changeStatus(Email $email){
        $email->status = $email->status == 0 ? 1 : 0;
        $result = $email->save();
        return redirect()->route('admin.notify.email.index')->with('swal-success', 'تغییر شما با موفقیت حذف شد');
    }
}
