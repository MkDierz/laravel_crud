<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\question;
use App\answer;
use Carbon\Carbon;
use Throwable;

class QuestionController extends Controller
{
    public function index()
    {
        $items = question::get_all();
        return view('pertanyaan_index', compact('items'));
    }

    public function create()
    {
        return view('pertanyaan_add');
    }

    public function insert(Request $request)
    {
        $data = $request->all();
        unset($data["_token"]);
        $item = question::insert($data);
        if ($item) {
            return redirect('/pertanyaan');
        }
    }

    public function view($id)
    {
        $answer = answer::get_source($id);
        try {
            // Validate the value...
            $answer[0];
            $data_out['answer'] = $answer;

        } catch (Throwable $e) {
//            report($e);
//            dd($answer);
//            return false;
            $data_out['answer'] = false;
        }
        $data = question::get_id($id);
        $data_out['question'] = $data[0];
        return view('pertanyaan_detail',compact('data_out'));
    }

    public function edit($id)
    {
        $data = question::get_id($id)[0];
        return view('pertanyaan_edit',compact('data'));
    }

    public function update($id,Request $request)
    {
        unset($request["_token"]);
//        dd($request->all());
//        question::whereId($id)->update($request->all());
        $request['id'] = $id;
        question::update_tbl($request->all());
        if ($request) {
            return redirect('/pertanyaan/'.$id);
        }

    }

    public function delete($id)
    {
        question::delete_tbl($id);
        return redirect('/pertanyaan');
    }

//    public function
}
