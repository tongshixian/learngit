<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sign extends Model
{
    //
    static public function find($data){
        $data = DB::table('sign')->where('username',$data)->first();
        return $data;
    }
    static public function create(&$data){
        $res = DB::table('sign')->insert($data);
        if($res){
            return true;
        }else{
            return false;
        }
    }
    static public function modify($username,&$data){
        $result = DB::table('sign')->where('username',$username)->update($data);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
