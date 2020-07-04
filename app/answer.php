<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class answer extends Model
{
    public static function get_all()
    {
        return DB::table('answers')->get();
    }
    public static function get_id($id)
    {
        return DB::table('answers')->where('id',$id)->get();
    }

    public static function get_source($id)
    {
        return DB::table('answers')->where('question_id',$id)->get();
    }

    public static function insert($data)
    {
        return DB::table('answers')->insert($data);
    }

    public static function update_tbl($data)
    {
        return DB::table('answers')->where('id',$data['id'])->update($data);
    }

    public static function delete_tbl($id)
    {
        return DB::table('answers')->delete($id);
    }

}
