<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\UserRequest;
use App\Models\Course;
use App\Models\CourseUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rate=CourseUser::where('user_id',Auth::id())->count();
        $user=User::query()->orderBy('id','desc')->get();
        return view('front.users.index',compact('user','rate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.users.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {

        $inputs=$request->all();
        $inputs['password'] = Hash::make($inputs['password']);
        $inputs['type'] = 'USER';
        $inputs['rate'] = 0;
        $inputs['user_id'] =Auth::id();

        if ($request->file('avatar_path'))
            $inputs['avatar_path'] = $this->uploadFile($request->file('avatar_path'),'profile/image');

        $result=User::create($inputs);
        if ($result){
            return redirect('/users')->with('success','با موفقیت ثبت شد.');
        } else{
            return back()->withErrors($validation);
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

        $id=Auth::user()->id;
        $user=Auth::user();
        $course=User::find($id)->courses->where('user_id',$id);
        $rate=CourseUser::where('user_id',Auth::id())->count();

        return view('front.users.show',compact('user','course','rate'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inputs=User::query()->where('id',$id)->first();
        return view('front.users.edit',compact('inputs'));

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
        $data=$request->only('user_id','name','family','melli_code','gender','mobile','email','birthday','job','address','avatar_path','type','rate');

        if (!is_null(\request('password')) ){
            $data['password'] = Hash::make(\request('password'));
            $data['password_confirmation'] = \request('password_confirmation');
        }
        if ($request->file('avatar_path'))
            $data['avatar_path'] = $this->uploadFile($request->file('avatar_path'),'profile/image');

        User::query()->where('id',$id)->update($data);
        return redirect('/users/show')->with('success','با موفقیت ویرایش شد.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::query()->where('id',$id)->delete();
        return back();
    }

    public function deletephoto($id)
    {
        $user = User::query()->find($id);
        if($user){
            $user->avatar_path= null;
            $user->save();
        }
        return back();
    }
}
