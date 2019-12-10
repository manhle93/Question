<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function formChangePass(Request $request){
        return view('doimatkhau');
    }
    public function changePass(Request $request){
        $data = $request->all();
        if($data['quantri'] != 'abcd123456@')
        {
            return response()->json([
                'message'=> 'Sai mật khẩu quản trị',
            ],422);
        }
        if(User::where('email', $data['email'])->first() == null){
            return response()->json([
                'message'=> 'Sai email'
            ],400);
        }
        try {
            User::where('email', $data['email'])->update([
                'password'=> Hash::make($data['password'])
            ]);
            return response()->json([
                'message'=> 'done'
            ],200);
        } catch( \Exception $e){
            return response()->json([
                'message'=> 'Lỗi',
                'code'=>500,
                'data'=> $e
            ],500);
        }
    }
}
