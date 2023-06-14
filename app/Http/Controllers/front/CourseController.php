<?php

namespace App\Http\Controllers\front;

use App\Filters\CourseFilter;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course=Course::query()->filter(new CourseFilter())->get();
        return view('front.courses.index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.courses.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs=$request->only(['id_code','user_id','title','slug','type','start_at','description','file','teacher_id']);
        $inputs['rate'] = 0;
        $inputs['user_id'] =Auth::id();

        if ($request->file('file'))
            $inputs['file'] = $this->uploadMedia($request->file('file'));

        $result=Course::create($inputs);

        if ($result){
            return redirect('front/courses');
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
        $course=Course::query()->find($id);
        return view('front.courses.show',compact('course'));

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
        return view('front.courses.edit',compact('inputs'));

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
        $data=$request->only('id_code','title','slug','type','start_at','description','file','teacher_id');
        if ($request->file('file'))
            $data['file'] = $this->uploadMedia($request->file('file'));
        Course::query()->where('id',$id)->update($data);
        return redirect('front/courses');


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
