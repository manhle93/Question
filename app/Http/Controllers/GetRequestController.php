<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class GetRequestController extends Controller
{
    public function getRequest(Request $request, $id)
    {
        $question = Question::query()->where('id',$id)->with('answer')->get();
       return view('request',[
           'question'=>$question
       ]);
    }
}
