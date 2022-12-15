<?php

namespace App\Http\Controllers\front;

use App\Filters\ContactFilter;
use App\Filters\QuestionFilter;
use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question=Question::query()->filter(new QuestionFilter())->get();
        return view('front.question',compact('question'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question=Question::query()->get($id);
        return view('front.questions.show',compact('question'));

    }

}
