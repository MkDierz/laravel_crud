<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class question extends Model
{
    protected $table = 'questions';

    protected $fillable = [
        'title',
        'content'
    ];

    //
    public static function get_all()
    {
        return DB::table('questions')->orderBy('id', 'DESC')->get();
    }

    public static function get_id($id)
    {
        return DB::table('questions')->where('id',$id)->get();
    }

    public static function insert($data)
    {
        return DB::table('questions')->insert($data);
    }

    public static function update_tbl($data)
    {
        return DB::table('questions')->where('id',$data['id'])->update($data);
    }

    public static function delete_tbl($id)
    {
        return DB::table('questions')->delete($id);
    }
}
