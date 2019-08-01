<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

class PackageController extends Controller
{
    public function show(){
        $info = Package::query()->get();
        return view('package', ['gois'=>$info]);
    }
    public function add(Request $request){
        $data = $request->all();
        $package = Package::create($data);
        return response()->json([
            'message'=>'thành công',
            'result' => $package,
        ],200);
    }

    public function get(){
        $info = Package::query()->get();
        return response()->json([
            'package' => $info,
        ]);
    }
    public function edit(){

    }
    public function delete($id){
        Package::find($id)->delete();
        return response()->json([
            'message'=>'thành công'
        ]);
    }
    public function showFormAdd(){
        return view('package-add');
    }
}
