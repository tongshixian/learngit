<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Month extends Model
{
    //注册用户
    static public function create(&$data){
        $result = DB::table('month_user')->insert($data);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    //查询用户
    static public function show($where){
        $data = DB::table('month_user')->where('user_name',$where)->get();
        return $data;
    }
    //用户登录
    static public function login(&$data){
        $result = DB::table('month_user')->where($data)->get();
        if($result){
            return true;
        }else{
            return false;
        }
    }
    //签到
    static public function up($user_name,$score){
        $result = DB::table('month_user')->where('user_name',$user_name)->update(['score'=>$score]);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    static public function shopShow(){
        $info = DB::table('month_shop')->get();
        return $info;
    }
    static public function createOrder(&$data){
        $result = DB::table('month_ordery')->insert($data);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    static public function showOrder(){
        $data = DB::table('month_ordery')->get();
        return $data;
    }
    static public function payUp($id){
        $result = DB::table('month_ordery')->where('order_id',$id)->update(['status'=>1]);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    static public function showDesc(){
        $data = DB::table('month_ordery')->where('status',1)->get();
        return $data;
    }
    static public function createDesc(&$data){
        $result = DB::table('month_image')->insert($data);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    static public function showNews(){
        $data = DB::table('month_news')->get();
        return $data;
    }
}
