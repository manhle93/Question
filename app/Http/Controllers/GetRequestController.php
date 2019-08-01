<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetRequestController extends Controller
{
    public function getRequest(Request $request, $id)
    {
       return view('request');
    }
}
