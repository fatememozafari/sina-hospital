<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return Course::query()->paginate();
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
//        return Course::create([
//            'title'=>'course5',
//            'slug'=>'course5',
//            'type'=>'SPECIALISED',
//            'start_at'=>'2022/12/01',
//            'description'=>'---',
//            'teacher_id'=>'1',
//            'user_id'=>'1',
//            'rate'=>'0',
//            'duration'=>'2',
//        ]);

        return Course::create($request->all());
    }

    public function edit()
    {

    }

    public function update(Request $request,$id)
    {
        $course=Course::query()->findOrFail($id);
       return $course->update($request->all());
    }

    public function show($id)
    {
        return Course::query()->findOrFail($id);
    }

    public function destroy($id)
    {
        Course::destroy($id);
    }
}
