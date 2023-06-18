<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\OfflineRequest;
use App\Models\Course;
use App\Models\File;
use App\Models\OfflineCourse;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OfflineCourseController extends Controller
{

    public function index()
    {
        $course=OfflineCourse::query()->with(['file'])->get();
        return view('admin.offline-courses.index',compact('course'));
    }

    public function create()
    {
        $teacher=Teacher::query()->get();
        return view('admin.offline-courses.create',compact('teacher'));

    }

    public function store(OfflineRequest $request)
    {
            $inputs=$request->all();

            $inputs['rate'] = 0;
            $inputs['user_id'] =Auth::id();
             $input['file'] = $request->input('file');

            $result=OfflineCourse::create($inputs);

             if ($request->hasFile('file')) {
            // upload send image image file
            $Filename = $this->uploadFile($request->file('file'), 'uploads/offlineCourse');
            // create file object
            $file = File::create(['file' =>  $Filename]);

            // attach file to email obj
             $result->file()->save($file);
        }

            if ($result){
                return redirect('/admin/offline-courses')->with('success','دوره جدید با موفقیت ثبت شد.');
            } else{
                return back()->withErrors($this->validate());
            }
    }


    public function show($id)
    {
        $course=OfflineCourse::query()->find($id);
        return view('admin.offline-courses.show',compact('course'));

    }

    public function edit($id)
    {
        $teacher=Teacher::query()->get();

        $inputs=OfflineCourse::query()->where('id',$id)->first();
        return view('admin.offline-courses.edit',compact('inputs','teacher'));

    }


    public function update(OfflineRequest $request, $id)
    {
        $data=$request->only('user_id','title','slug','type','description','file','teacher_id','rate','start_at');

        if ($request->file('file'))
            $data['file'] = $this->uploadFile($request->file('file'), 'uploads/offlineCourse');

        OfflineCourse::query()->where('id',$id)->update($data);

        return redirect('/admin/offline-courses')->with('success','با موفقیت ویرایش شد.');


    }

    public function destroy($id)
    {
        OfflineCourse::query()->where('id',$id)->delete();
        return back();
    }
}
