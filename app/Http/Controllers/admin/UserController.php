<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\UserRequest;
use App\Models\Course;
use App\Models\Document;
use App\Models\Enroll;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use function Symfony\Component\String\length;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::query()->with(['documents'])->orderBy('id','desc')->get();
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
            $inputs=$request->only(['user_id','name','family','melli_code','gender','mobile','email','password','password_confirmation','address','avatar_path','type','rate']);
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
    public function show(User $user, Document $document)
    {
        $user=User::query()->find($user->id);
        $course=User::find($user->id)->courses->where('user_id',$user->id);
        return view('admin.users.show',compact('user','course'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $inputs=User::query()->where('id',$user->id)->first();
        return view('admin.users.edit',compact('inputs'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
//        dd($request->all());
        $data=$request->only([
            'name','family','melli_code',
            'gender','mobile','email',
            'password','password_confirmation',
            'address','avatar_path','role_id','rate',
            'user_id',
        ]);
//        $data['password'] = Hash::make($data['password']);

        if ($request->file('avatar_path'))
            $data['avatar_path'] = $this->uploadFile($request->file('avatar_path'),'profile/image');

        if ($request->has('password')){
            $data['password'] =  Hash::make($request['password']);
        }

        if ($request->has('password_confirmation')){
            $data['password_confirmation'] = \request('password_confirmation');
        }


        User::query()->where('id',$user->id)->update($data);
        return redirect('admin/users')->with('success','با موفقیت ویرایش شد.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::query()->where('id',$user->id)->delete();
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

    public function ajaxUser()
    {

        $users=User::where('name','like',"%".request('user_id')."%")
            ->orwhere('family','like',"%".request('user_id')."%")
            ->get(
                [
                'id as id', 'name as text'
            ]
            )->toArray();
        return \response()->json(['data'=> $users]);
    }
}
