<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class question extends Model
{
    //
    public static function get_all()
    {
        return DB::table('questions')->get();
    }

    public static function insert($data)
    {
        return DB::table('questions')->insert($data);
    }
}
