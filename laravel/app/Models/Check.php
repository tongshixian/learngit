<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Check extends Model
{
    public function add(&$data){
        $res = DB::table('check')->insert($data);
        if($res){
            return true;
        }else{
            return false;
        }
    }
    public function show(){
        $res = DB::table('check')->get();
        return $res;
    }
    public function up(&$id){
        $res = DB::table('check')->where('id',$id)->update(['shop_static'=>1]);
        if($res){
            return true;
        }else{
            return false;
        }
    }
}
