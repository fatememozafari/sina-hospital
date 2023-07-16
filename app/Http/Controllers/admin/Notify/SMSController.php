<?php

namespace App\Http\Controllers\admin\Notify;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\CourseRequest;
use App\Models\Course;
use App\Models\Notify\SMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SMSController extends Controller
{
    public function index()
    {
        $sms=SMS::query()->get();
        return view('admin.notify.sms.index',compact('sms'));
    }


    public function create()
    {
        return view('admin.notify.sms.create');

    }


    public function store(Request $request)
    {

        $sms=$request->all();
        $sms['status'] = 1;

        $result=SMS::create($sms);

        if ($result){
            return redirect()->route('admin.sms.index')->with('success','پیام جدید با موفقیت ثبت شد.');
        } else{
            return back()->withErrors($this->validate());
        }


    }

    public function show($id)
    {
        $sms=SMS::query()->find($id);
        return view('admin.notify.sms.show',compact('sms'));

    }


    public function edit($id)
    {
        $sms=SMS::query()->where('id',$id)->first();
        return view('admin.notify.sms.edit',compact('sms'));

    }


    public function update(Request $request, $id)
    {
        $data=$request->all();

        SMS::query()->where('id',$id)->update($data);
        return redirect()->route('admin.sms.index')->with('success','با موفقیت ویرایش شد.');


    }


    public function destroy($id)
    {
        SMS::query()->where('id',$id)->delete();
        return back();
    }

    public function changeStatus(SMS $SMS){
        $SMS->status = $SMS->status == 0 ? 1 : 0;
        $result = $SMS->save();
        return redirect()->route('admin.notify.sms.index')->with('swal-success', 'تغییر شما با موفقیت حذف شد');
    }
}
