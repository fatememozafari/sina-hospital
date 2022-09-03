<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    public function store(Request $request)
    {
        $inputs=$request->only(['name','family','melli_code','gender','mobile','email','birthday','job','password','password_verification','address','avatar_path','type','rate']);
        $inputs['password'] = Hash::make($inputs['password']);
        $inputs['type'] = 'USER';
        $inputs['rate'] = 0;

        if ($request->file('avatar_path'))
            $inputs['avatar_path'] = $this->uploadMedia($request->file('avatar_path'));

        $result=User::create($inputs);
        if ($result){
            return redirect('admin/users');
        } else{
            return back();
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
        return view('admin.users.show',compact('user'));

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
    public function update(Request $request, $id)
    {
        $data=$request->only('name','family','melli_code','gender','mobile','email','birthday','job','password','password_verification','address','avatar_path','type','rate');
        $data['password'] = Hash::make($data['password']);

        if ($request->file('avatar_path'))
            $data['avatar_path'] = $this->uploadMedia($request->file('avatar_path'));

        User::query()->where('id',$id)->update($data);
        return redirect('admin/users');


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
}
