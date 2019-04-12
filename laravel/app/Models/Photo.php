<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Photo extends Model
{
    //添加
    static public function create(&$data){
    	$result = DB::table('photo')->insert($data);
    	if($result){
    		return true;
    	}else{
    		return false;
    	}
    }
    //查询图片数据
    static public function show(){
    	$result = DB::table('photo')->paginate(1);
    	return $result;
    }
    static public function alls(){
    	$result = DB::table('photo')->get();
    	return $result;
    }
}
