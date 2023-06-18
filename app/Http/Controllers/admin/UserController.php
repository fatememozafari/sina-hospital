<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\UserRequest;
use App\Models\Course;
use App\Models\Enroll;
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
        $user=User::query()->orderBy('id','desc')->get();
        return view('admin.users.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
            $inputs=$request->only(['user_id','name','family','melli_code','gender','mobile','email','birthday','job','password','password_confirmation','address','avatar_path','type','rate']);
            $inputs['password'] = Hash::make($inputs['password']);
            $inputs['type'] = 'USER';
            $inputs['rate'] = 0;
            $inputs['user_id'] =Auth::id();

            if ($request->file('avatar_path'))
                $inputs['avatar_path'] = $this->uploadFile($request->file('avatar_path'),'profile/image');

            $result=User::create($inputs);
            if ($result){
                return redirect('admin/users')->with('success','با موفقیت ثبت شد.');
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
        $user=User::query()->find($id);
        $course=User::find($id)->courses->where('user_id',$id);
        return view('admin.users.show',compact('user','course'));

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
        return view('admin.users.edit',compact('inputs'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $data=$request->only('name','family','melli_code','gender','mobile','email','birthday','job','password','password_confirmation','address','avatar_path','type','rate');
//        $data['password'] = Hash::make($data['password']);

        if ($request->file('avatar_path'))
            $data['avatar_path'] = $this->uploadFile($request->file('avatar_path'),'profile/image');

        User::query()->where('id',$id)->update($data);
        return redirect('admin/users')->with('success','با موفقیت ویرایش شد.');


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
