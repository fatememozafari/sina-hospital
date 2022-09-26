<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseUser;
use App\Models\Score;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScoreController extends Controller
{
    public function index()
    {
        $user=Auth::user();
        $rate=CourseUser::where('user_id',Auth::id())->count();
        $sp=$user->courses->where('type','SPECIALISED')->count();
        $semi=$user->courses->where('type','SEMI_SPECIALISED')->count();
        $gn=$user->courses->where('type','GENERAL')->count();
        $courses=$user->courses;
        Course::query()->with(['users','score'])->paginate(12);
//dd($courses);

        return view('front.results.index',compact('courses','user','sp','semi','gn','rate'));
    }
}
