<?php

namespace App\Http\Controllers;

use App\PackageOld;
use App\Question;
use Illuminate\Http\Request;

class GetRequestController extends Controller
{
    public function getRequest(Request $request, $id, $turnid)
    {
            $package_old = PackageOld::query()->create([
                'turn_id' => $turnid,
                'package_id' => $id,
                'point1' => 0,
                'point2' => 0,
                'point3' => 0
            ]);
        $question = Question::query()->where('package_id', $id)->with('answer')->get();
        return view('request', [
            'question' => $question,
            'package_old_id' => $package_old->id
        ]);
    }
}
