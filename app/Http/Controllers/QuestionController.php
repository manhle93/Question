<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;

class QuestionController extends Controller
{
    public function showFormAdd($id)
    {
        return view('question', ['id' => $id]);
    }
    public function add(Request $request)
    {
        $data = $request->all();
        $question = Question::query()->create([
            'name' => $data['noidung'],
            'package_id' => $data['package_id']
        ]);
        foreach ($data['dapan'] as $item) {
            if ($item['dap_an'] == "true") {
                $item['dap_an'] = true;
            } else {
                $item['dap_an'] = false;
            }
            Answer::query()->create([
                'name' => $item['name'],
                'dap_an' => $item['dap_an'],
                'question_id' => $question->id
            ]);
        }
        return response()->json([
            'message' => "thanh cong"
        ]);
    }
}
