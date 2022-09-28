<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\OfflineCourse;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfflineCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course=OfflineCourse::query()->get();
        return view('admin.offline-courses.index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher=Teacher::query()->get();
        return view('admin.offline-courses.create',compact('teacher'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs=$request->only(['id_code','user_id','title','slug','type','description','file','teacher_id','file_type','rate','start_at']);
        $inputs['rate'] = 0;
        $inputs['user_id'] =Auth::id();

        if ($request->file('file'))
            $inputs['file'] = $this->uploadMedia($request->file('file'));

        $result=OfflineCourse::create($inputs);

        if ($result){
            return redirect('/admin/offline-courses');
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
        $course=OfflineCourse::query()->find($id);
        return view('admin.offline-courses.show',compact('course'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher=Teacher::query()->get();

        $inputs=OfflineCourse::query()->where('id',$id)->first();
        return view('admin.offline-courses.edit',compact('inputs','teacher'));

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
        $data=$request->only('id_code','user_id','title','slug','type','description','file','teacher_id','file_type','rate','start_at');
        if ($request->file('file'))
            $data['file'] = $this->uploadMedia($request->file('file'));
        OfflineCourse::query()->where('id',$id)->update($data);
        return redirect('/admin/offline-courses');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OfflineCourse::query()->where('id',$id)->delete();
        return back();
    }
}
