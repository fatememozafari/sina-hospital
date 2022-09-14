<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

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
        return view('front.teachers.index',compact('teacher'));
    }

    public function show($id)
    {
        $course=Course::query()->where('teacher_id',$id)->get();

        $teacher=Teacher::query()->find($id);
        return view('front.teachers.show',compact('teacher','course'));

    }


}
