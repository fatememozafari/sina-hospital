<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\NewsRequest;
use App\Models\Image;
use App\Models\News;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=News::query()->with(['images'])->orderBy('id','desc')->get();
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
    public function store(NewsRequest $request)
    {

            $news=new News([
                'title'=> $request->title,
                'body'=> $request->body,
                'writer'=> $request->writer,
                'photographer'=> $request->photographer,
                'feedback'=> $request->feedback,
                'instagram'=> $request->instagram,
                'facebook'=> $request->facebook,
                'twitter'=> $request->twitter,
            ]);
            $news->save();
            if ($request->hasFile('images')){
                $files=$request->file('images');
                foreach ($files as $file){
                    $imageName=time().'_'.$file->getClientOriginalName();
                    $request['news_id']=$news->id;
                    $request['image']=$imageName;
                    $file->move(\public_path('/images'),$imageName);
                    Image::create($request->all());
                }
            }

            return redirect('/admin/news')->with('success','با موفقیت ثبت شد.');

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
        $inputs=News::query()->findOrFail($id);
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
        $news=News::query()->findOrFail($id);
        $news->update([
            'title'=> $request->title,
            'body'=> $request->body,
            'writer'=> $request->writer,
            'photographer'=> $request->photographer,
            'feedback'=> $request->feedback,
            'instagram'=> $request->instagram,
            'facebook'=> $request->facebook,
            'twitter'=> $request->twitter,
        ]);
        if ($request->hasFile('images')){
            $files=$request->file('images');
            foreach ($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request['news_id']=$news->id;
                $request['image']=$imageName;
                $file->move(\public_path('images'),$imageName);
                Image::create($request->all());
            }
        }
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
        $news=News::query()->findOrFail($id);
        $images=Image::query()->where('news_id',$news->id)->get();
        foreach ($images as $image){
           if (\Illuminate\Support\Facades\File::exists('images/'.$image->image)){
               \Illuminate\Support\Facades\File::delete('images/'.$image->image);
           }
        }
        $news->delete();
        return back();
    }

    public function deleteImage($id)
    {
        $images=Image::query()->findOrFail($id);
            if (\Illuminate\Support\Facades\File::exists('images/'.$images->image)){
                \Illuminate\Support\Facades\File::delete('images/'.$images->image);
            }
            Image::query()->find($id)->delete();

        return back();
    }
}
