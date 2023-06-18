<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\ScoreRequest;
use App\Models\Course;
use App\Models\CourseUser;
use App\Models\Score;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ScoreController extends Controller
{
    public function courseList()
    {
        $course=Course::query()->get();
        return view('admin.scores.course-list',compact('course'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $course=Course::query()->get();
        return view('admin.scores.index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        Course::with(['users'])->get();
        $course = Course::query()->where('id', $id)->first();
        return view('admin.scores.create', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ScoreRequest $request)
    {

            $inputs=$request->only(['user_id','course_id','score']);
            $check=Score::query()
                ->where([
                    ['course_id','=',$request->course_id],
                    ['user_id','=',$request->user_id]
                ])->exists();

            if (!$check) {
                $result = Score::create($inputs);
                if ($result) {
                    return back()->with('success','با موفقیت ثبت شد');
                } else {
                    return back()->withErrors($validation);
                }

            } else {

                return back()->withErrors('قبلا برای کاربر با این درس نمره ثبت شده است.');
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
        $score=Score::query()->where('course_id',$id)->with(['user','course'])->get();

        return view('admin.scores.show',compact('score'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $inputs=Score::query()->where('id',$id)->with(['user','course'])->first();
//dd($score);
        return view('admin.scores.edit', compact('inputs'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ScoreRequest $request)
    {
        $data=$request->only('user_id','course_id','score');
        Score::query()->where([
            ['course_id','=',$request->course_id],
            ['user_id','=',$request->user_id]
        ])->update($data);
        return redirect()->route('admin.scores.show', ['id' => $request->course_id])->with('success','با موفقیت ویرایش شد.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Score::query()->where('id',$id)->delete();
        return back();
    }
}
