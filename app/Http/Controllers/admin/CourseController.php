<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course=Course::query()->get();
        return view('admin.courses.index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {

            $inputs=$request->only(['id_code','user_id','title','slug','type','start_at','description','teacher_id']);
            $inputs['rate'] = 0;
            $inputs['user_id'] =Auth::id();

            if ($request->file('file'))
                $inputs['file'] = $this->uploadMedia($request->file('file'));

            $result=Course::create($inputs);

            if ($result){
                return redirect('admin/courses')->with('success','دوره جدید با موفقیت ثبت شد.');
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
        $course=Course::query()->find($id);
        return view('admin.courses.show',compact('course'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inputs=Course::query()->where('id',$id)->first();
        return view('admin.courses.edit',compact('inputs'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseRequest $request, $id)
    {
        $data=$request->only('id_code','title','slug','type','start_at','description','file','teacher_id');
        if ($request->file('file'))
            $data['file'] = $this->uploadMedia($request->file('file'));
        Course::query()->where('id',$id)->update($data);
        return redirect('admin/courses')->with('success','با موفقیت ویرایش شد.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::query()->where('id',$id)->delete();
        return back();
    }
}
