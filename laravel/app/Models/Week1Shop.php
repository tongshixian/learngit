<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Week1Shop extends Model
{
    //添加
    static public function add(&$data){
        $result = DB::table('week1_shop')->insert($data);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    //展示
    static public function show(){
        $data = DB::table('week1_shop')->paginate(3);
        return $data;
    }
    //根据id查询
    static public function modifyById($id){
        $data = DB::table('week1_shop')->where('id',$id)->get();
        return $data;
    }
    //修改
    static public function modify($id,&$data){
        $result = DB::table('week1_shop')->where('id',$id)->update($data);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    //删除
    static public function del($id){
        $result = DB::table('week1_shop')->where('id',$id)->delete();
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
