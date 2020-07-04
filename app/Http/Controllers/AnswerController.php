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

    public function edit($id)
    {
        $data = answer::get_id($id)[0];
        return view('jawaban_edit',compact('data'));
    }

    public function update($id,Request $request)
    {
        unset($request["_token"]);
        $request['id'] = $id;
        answer::update_tbl($request->all());
        $source = answer::get_id($id)[0]->question_id;
        if ($request) {
            return redirect('/pertanyaan/'.$source);
        }

    }

    public function delete($id)
    {
        $source = answer::get_id($id)[0]->question_id;
//        dd($source);
        answer::delete_tbl($id);

        return redirect('/pertanyaan/'.$source);
    }
}
