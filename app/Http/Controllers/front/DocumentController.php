<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $document=Document::query()->get();
        return view('front.documents.index',compact('document'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.documents.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs=$request->only(['id_code','title','slug','type','start_at','description','file','rate','file_type','teacher_id']);
        $inputs['rate'] = 0;

        if ($request->file('file'))
            $inputs['file'] = $this->uploadMedia($request->file('file'));

        $result=Document::create($inputs);

        if ($result){
            return redirect('front/documents');
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
        $document=Document::query()->find($id);
        return view('front.documents.show',compact('document'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inputs=Document::query()->where('id',$id)->first();
        return view('front.documents.edit',compact('inputs'));

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
        $data=$request->only('id_code','title','slug','type','start_at','description','file','rate','file_type','teacher_id');
        if ($request->file('file'))
            $data['file'] = $this->uploadMedia($request->file('file'));
        Document::query()->where('id',$id)->update($data);
        return redirect('front/documents');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Document::query()->where('id',$id)->delete();
        return back();
    }
}
