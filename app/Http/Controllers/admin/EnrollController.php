<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\EnrollRequest;
use App\Models\Course;
use App\Models\CourseUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EnrollController extends Controller
{
    public function courseList()
    {
        $course=Course::query()->get();
        return view('admin.enrolls.course-list',compact('course'));
    }
    public function index()
    {

        $user = User::query()->find(1);
        $enrolls = $user->courses;
        dd($user);
        return view('admin.enrolls.index', compact('enrolls'));
    }

        public function create($id)
    {

        $user = User::query()->get();
        $course = Course::query()->where('id', $id)->first();
        return view('admin.enrolls.create', compact('course', 'user'));
    }

    public function store(EnrollRequest $request)
    {
            $inputs = $request->only(['user_id', 'course_id']);
            $check=CourseUser::query()
                ->where([
                    ['course_id','=',$request->course_id],
                    ['user_id','=',$request->user_id]
                ])->exists();

            if (!$check) {
                $result = CourseUser::create($inputs);
                if ($result) {
                    return back()->with('success','با موفقیت ثبت شد.');
//                return redirect('/admin/enrolls');
                } else {
                    return back()->withErrors($this->validate());
                }

            } else {
                return back()->withErrors('شما قبلا در این درس ثبت نام کرده اید.');
            }

        }


}
