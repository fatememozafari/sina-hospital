<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=News::query()->orderBy('id','desc')->get();
        return view('admin.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs=$request->only(['title','body','writer','photographer','feedback','avatar_path1','avatar_path2','avatar_path3','instagram','facebook','twitter',
        ]);
        if ($request->file('avatar_path1')){
            $inputs['avatar_path1'] = $this->uploadMedia($request->file('avatar_path1'));

        }
        if ($request->file('avatar_path2')){
            $inputs['avatar_path2'] = $this->uploadMedia($request->file('avatar_path2'));

        }
        if ($request->file('avatar_path3')){
            $inputs['avatar_path3'] = $this->uploadMedia($request->file('avatar_path3'));

        }

        News::create($inputs);
        return redirect('/admin/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news=News::query()->find($id);
        return view('admin.news.show',compact('news'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inputs=News::query()->where('id',$id)->first();
        return view('admin.news.edit',compact('inputs'));

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
        $data=$request->only('title','body','writer','photographer','feedback','avatar_path1','avatar_path2','avatar_path3','instagram','facebook','twitter',
        );
        if ($request->file('avatar_path1')){
            $data['avatar_path1'] = $this->uploadMedia($request->file('avatar_path1'));
        }
        if ($request->file('avatar_path2')){
            $data['avatar_path2'] = $this->uploadMedia($request->file('avatar_path2'));
        }
        if ($request->file('avatar_path3')){
            $data['avatar_path3'] = $this->uploadMedia($request->file('avatar_path3'));
        }
        News::query()->where('id',$id)->update($data);
        return redirect('/admin/news');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::query()->where('id',$id)->delete();
        return back();
    }
}
