<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\File;
use App\Models\OfflineCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class OfflineCourseController extends Controller
{

    public function index()
    {
        $course=OfflineCourse::query()->with(['file'])->get();
        return view('front.offline-courses.index',compact('course'));
    }

    public function show($id)
    {
        $course=OfflineCourse::query()->find($id);
        return view('front.offline-courses.show',compact('course'));

    }

}
