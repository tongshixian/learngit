<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    //查询一条
    public function findOne($num){
        $res = DB::table('student')->where('num',$num)->first();
        if($res){
            return true;
        }else{
            return false;
        }
    }
    //添加数据
    public function add($data){
        $res = DB::table('student')->insert($data);
        if($res){
            return true;
        }else{
            return false;
        }
    }
    //展示数据
    public function showData(){
        $res = DB::table('student')->where('status',1)->get();
        return $res;
    }
    //修改数据
    public function upData($id){
        $res = DB::table('student')->where('id',$id)->update(['num'=>'123']);
        if($res){
            return true;
        }else{
            return false;
        }
    }
    //修改数据
    public function delData($id){
        $res = DB::table('student')->where('id',$id)->update(['status'=>'0']);
        if($res){
            return true;
        }else{
            return false;
        }
    }
    public function rand(){
        $id = rand(1,5);
        $res = DB::table('student')->where('id',$id)->first();
        return $res;
    }
}
