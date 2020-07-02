<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\question;
use Carbon\Carbon;

class QuestionController extends Controller
{
    public function index()
    {
        $items = question::get_all();
        return view('index', compact('items'));
    }

    public function create()
    {
        return view('question_form');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        unset($data["_token"]);
        unset($data["files"]);
        $data['date_create'] = Carbon::now()->toDateString();
        $item = question::insert($data);
        if ($item) {
            return redirect('/pertanyaan');
        }
    }
}
