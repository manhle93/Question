<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PlayController extends Controller
{
    public function index(){
        return view('startgame');
    }
    public function getPackage(){
        $package=Package::query()->get();
        return response()->json([
            'message'=>'thành công',
            'result' => $package,
        ],200);
    }
    public function getAllPackage(){
        $package=Package::query()->get();
        return view('resetgame');
    }
}
