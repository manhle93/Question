<?php

namespace App\Http\Controllers;

use App\Package;
use App\PackageOld;
use App\Turn;
use Illuminate\Http\Request;

class PlayController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('startgame');
    }

    public function getPackage()
    {
        $package = Package::query()->get();
        $turn = Turn::query()->create([
            'total_point1' => 0,
            'total_point2' => 0,
            'total_point3' => 0
        ]);
        $data = [$turn, $package];
        return response()->json([
            'message' => 'thành công',
            'result' => $data,
        ], 200);
    }

    public function getAllPackage(Request $request, $id)
    {
        $package_old = PackageOld::query()->findOrFail($id);
        $turn_id = $package_old->turn_id;
        $package_orth = PackageOld::query()->where('turn_id', $turn_id)->get();
        foreach ($package_orth as $item) {
            $data[] = $item->package_id;
        }
        $totalpoint=Turn::query()->findOrFail($turn_id);
        // $package = Package::query()->whereNotIn('id', $data)->get();
        // $packageOld = Package::query()->whereIn('id', $data)->get();
        $package = Package::query()->get();
        foreach($package as $item){
            for($i=0; $i<count($data); $i++){
                if($item->id == $data[$i]){
                    $item['da_choi'] = true;
                }
            }
        }
        return view('resetgame', [
            'package' => $package,
            'turn' => $turn_id,
            'totalpoint' =>$totalpoint,
        ]);
    }

    public function UpdatePackage(Request $request, $id)
    {
        $data = $request->All();
//        dd($data);
        $package = PackageOld::query()->findOrFail($id);
        $package->update($data);
        $turn = Turn::query()->findOrFail($package->turn_id);
        $turn->update([
            'total_point1' => $data['point1'],
            'total_point2' => $data['point2'],
            'total_point3' => $data['point3'],
        ]);
        return response()->json([
            'message' => 'thành công',
        ], 200);
    }
    public function getTotalPoint(Request $request, $id){
        $package_old = PackageOld::query()->findOrFail($id);
        $turn_id = $package_old->turn_id;
        $totalpoint=Turn::query()->findOrFail($turn_id);
        return response()->json([
            'message' => 'thành công',
            'result' => $totalpoint,
        ], 200);
    }
    public function resetPoint(Request $request, $id){
        $package = PackageOld::query()->findOrFail($id);
        $package->update([
            'point1' => 0,
            'point2' => 0,
            'point3' => 0,
        ]);
        $turn = Turn::query()->findOrFail($package->turn_id);
        $turn->update([
            'total_point1' => 0,
            'total_point2' => 0,
            'total_point3' => 0,
        ]);
        return response()->json([
            'message' => 'thành công',
        ], 200);
    }
    public function getDetailPackage(Request $request, $id){
        $packageOld = PackageOld::query()->findOrFail($id);
        if(isset($packageOld)){
            $package=Package::query()->findOrFail($packageOld->package_id);
            return response()->json([
                'message' => 'thành công',
                'result' => $package,
            ], 200);
        }
        else{
            return response()->json([
                'message' => 'Khong ton tai goi cau hoi',
            ], 400);
        }
    }
}
