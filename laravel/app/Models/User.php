<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    //添加rbac
    static public function createUser(&$data){
        $data = DB::table('user')->insert($data);
        return $data;
    }
    //添加图书
    static public function createBook(&$data){
        $data = DB::table('book')->insert($data);
        return $data;
    }
    //根据用户找权限
    static public function selectUser($user_name){
        $data = DB::table('user')->where('user_name',$user_name)->get();
        return $data;
    }
    //修改分类信息
    static public function modify($type_id,&$data){
        $result = DB::table('btype')->where('type_id',$type_id)->update($data);
        return $result;
    }

}
