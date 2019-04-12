<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Apartment extends Model
{
    //查询
    static public function show(){
        $data = DB::table('flat_apartment')->get();
        return $data;
    }
    //添加
    static public function add(&$data){
        $result = DB::table('flat_apartment')->insert($data);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
