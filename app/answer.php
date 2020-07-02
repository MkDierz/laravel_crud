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
    public static function get_user_id($id)
    {
        return DB::table('answers')->where('user_id',$id)->get();
    }
    public static function insert($data)
    {
        return DB::table('answers')->insert($data);
    }

}
