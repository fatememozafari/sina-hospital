<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\document;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::query()->get();
        return view('admin.documents.index',compact('user'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $document=Document::query()->where('user_id',$id)->get();
        return view('admin.documents.show',compact('document'));

    }


}
