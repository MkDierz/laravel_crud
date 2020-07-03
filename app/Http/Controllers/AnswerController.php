<?php

namespace App\Http\Controllers;

use App\answer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index($id)
    {
        return view('jawaban_add',['id'=>$id]);
    }

    public function store($id,Request $request)
    {
        $data = $request->all();
        unset($data["_token"]);
        unset($data["files"]);
        $data['question_id'] = $id;
        $item = answer::insert($data);
        if ($item) {
            return redirect('/pertanyaan/'.$id);
        }
    }
}
