<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FlatSku extends Model
{
    static public function create(&$data){
        $result = DB::table('flat_sku')->insert($data);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    static public function show(){
        $data = DB::table('flat_sku')->get();
        return $data;
    }
}
