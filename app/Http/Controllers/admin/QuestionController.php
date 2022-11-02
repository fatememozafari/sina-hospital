<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question=Question::query()->orderBy('id','desc')->paginate(10);
        return view('admin.questions.index',compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.questions.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $rules=[];
        $request->validate([
            'question'=>['required'],
            'answer'=>['required'],
        ],[
            'required'=>'فیلد :attribute اجباری است.',
        ],[
            'question'=>'سوال',
            'answer'=>'پاسخ',

        ]);
        $validation= Validator::make($data,$rules);
        if ($validation->fails()){
            return back()->withErrors($validation);
        }else{
        $inputs=$request->only(['question','answer','avatar_path']);
        if ($request->file('avatar_path')){
            $inputs['avatar_path'] = $this->uploadMedia($request->file('avatar_path'));
        }
        Question::create($inputs);
        return redirect('/admin/questions')->with('success','با موفقیت ثبت شد.');
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
        $question=Question::query()->find($id);
        return view('admin.questions.show',compact('question'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inputs=Question::query()->where('id',$id)->first();
        return view('admin.questions.edit',compact('inputs'));

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
        $data=$request->only('question','answer','avatar_path');
        if ($request->file('avatar_path')){
            $data['avatar_path'] = $this->uploadMedia($request->file('avatar_path'));
        }
        Question::query()->where('id',$id)->update($data);
        return redirect('/admin/questions')->with('success','با موفقیت ویرایش شد.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::query()->where('id',$id)->delete();
        return back()->with('success','با موفقیت حذف شد.');
    }
}
