<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\TeacherRequest;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher=Teacher::query()->get();
        return view('admin.teachers.index',compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teachers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherRequest $request)
    {
            $inputs=$request->only(['name','family','melli_code','gender','mobile','email',
                'birthday','job','password','password_confirmation','address','avatar_path',
                'type','user_id']);
            $inputs['password'] = Hash::make($inputs['password']);
            $inputs['type'] = 'USER';
            $inputs['rate'] = 0;
            $inputs['user_id'] = Auth::id();

            if ($request->file('avatar_path'))
                $inputs['avatar_path'] = $this->uploadFile($request->file('avatar_path'),'uploads/teachers');

            $result=Teacher::create($inputs);
            if ($result){
                return redirect('/admin/teachers')->with('success','با موفقیت ثبت شد.');
            } else{
                return back()->withErrors($this->validate());
            }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course=Teacher::find($id)->courses->where('teacher_id',$id);

        $teacher=Teacher::query()->find($id);
        return view('admin.teachers.show',compact('teacher','course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inputs=Teacher::query()->where('id',$id)->first();
        return view('admin.teachers.edit',compact('inputs'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeacherRequest $request, $id)
    {
        $data=$request->only('name','family','melli_code','gender','mobile','email','birthday','job','password','password_confirmation','address','avatar_path','type');
//        $data['password'] = Hash::make($data['password']);

        if ($request->file('avatar_path'))
            $data['avatar_path'] = $this->uploadFile($request->file('avatar_path'),'uploads/teachers');

        Teacher::query()->where('id',$id)->update($data);
        return redirect('/admin/teachers')->with('success','با موفقیت ویرایش شد.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teacher::query()->where('id',$id)->delete();
        return back();
    }
}
