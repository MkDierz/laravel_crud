<?php

namespace App\Http\Controllers;

use App\answer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index($id)
    {
        return view('answer');
    }

    public function store($id,Request $request)
    {
//        dd($id);
        $data = $request->all();
//        dd($data);
        unset($data["_token"]);
        unset($data["files"]);
        $data['date_create'] = Carbon::now()->toDateString();
        $data['question_id'] = $id;
//        dd($data);
        $item = answer::insert($data);
        if ($item) {
            return redirect('/pertanyaan');
        }
    }
}
