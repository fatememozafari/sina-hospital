<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    public function store(Request $request)
    {
        $inputs=$request->only(['name','family','melli_code','gender','mobile','email','birthday','job','password','password_verification','address','avatar_path','type']);
        $inputs['password'] = Hash::make($inputs['password']);
        $inputs['type'] = 'USER';

        if ($request->file('avatar_path'))
            $inputs['avatar_path'] = $this->uploadMedia($request->file('avatar_path'));

        $result=Teacher::create($inputs);
        if ($result){
            return redirect('admin/teachers');
        } else{
            return back();
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
        $teacher=Teacher::query()->find($id);
        return view('admin.teachers.show',compact('teacher'));

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
    public function update(Request $request, $id)
    {
        $data=$request->only('name','family','melli_code','gender','mobile','email','birthday','job','password','password_verification','address','avatar_path','type');
        $data['password'] = Hash::make($data['password']);

        if ($request->file('avatar_path'))
            $data['avatar_path'] = $this->uploadMedia($request->file('avatar_path'));

        Teacher::query()->where('id',$id)->update($data);
        return redirect('admin/users');


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
