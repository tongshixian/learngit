<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Pages extends Model
{
    //展示
    static public function show(){
    	$result = DB::table('pages')->orderBy('id')->get();
    	return $result;
    }
    //查询数据库中的数量
    static public function pageCount(){
    	$result = DB::table('pages')->count();
    	return $result;
    }
    //分页limit查询
    static public function pageLimit($start,$limit){
    	$result = DB::table('pages')->orderBy('id')->offset($start)->limit($limit)->get();
    	return $result;
    }
}
