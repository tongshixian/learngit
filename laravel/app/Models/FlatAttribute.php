<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FlatAttribute extends Model
{
    static public function create(&$data){
        $result = DB::table('flat_attribute')->insert($data);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    static public function show(){
        $data = DB::table('flat_attribute')->get();
        return $data;
    }
    static public function createValue(&$data){
        $result = DB::table('flat_attribute_value')->insert($data);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    static public function showValue(){
        $data = DB::table('flat_attribute_value')->get();
        return $data;
    }
}
