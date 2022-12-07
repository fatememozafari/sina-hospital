<?php

namespace App\Http\Controllers\front;

use App\Filters\NewsFilter;
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
        $news = News::query()->with(['images'])->orderBy('id', 'desc')->filter(new NewsFilter())->get();
        return view('front.news', compact('news'));
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::query()->get($id);
        return view('front.news.show', compact('news'));

    }


}
