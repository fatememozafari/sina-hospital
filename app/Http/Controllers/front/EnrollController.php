<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Sodium\increment;

class EnrollController extends Controller
{

    public function index()
    {

        $user = Auth::user();
        $enrolls = $user->courses;
        return view('front.enrolls.index', compact('enrolls'));
    }

//    public function create($id)
//    {
//        $user = Auth::user();
//        $course = Course::query()->where('id', $id)->first();
//        return view('front.enrolls.create', compact('course', 'user'));
//    }

    public function store(Request $request)
    {

        $inputs = $request->only(['user_id', 'course_id']);
        $inputs['user_id'] = Auth::user()->id;
        $check=CourseUser::query()
            ->where([
                ['course_id','=',$request->course_id],
                ['user_id','=',Auth::id()]
            ])->exists();

        if (!$check) {
            $result = CourseUser::create($inputs);
            if ($result) {

                return redirect('/enrolls');
            } else {
                return back();
            }

        } else {
            return back();
        }

    }
}
