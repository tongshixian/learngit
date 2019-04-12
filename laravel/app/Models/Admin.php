<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{
    //添加用户
    static public function create(&$data){
        $res = DB::table('admin')->insert($data);
        if($res){
            return true;
        }else{
            return false;
        }
    }
    //用户登录
    static public function findOne(&$data){
        $res = DB::table('admin')->where($data)->first();
        if($res){
            return true;
        }else{
            return false;
        }
    }
}
