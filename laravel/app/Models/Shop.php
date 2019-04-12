<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Shop extends Model
{
    //商品属性
    static public function shopType($shop_id){
        $data = DB::table('type')->where('shop_id',$shop_id)->get();
        return $data;
    }
    //商品展示
    static public function show($shop_id){
        $data = DB::table('shop')->where('shop_id',$shop_id)->get();
        return $data;
    }
    //sku
    static public function select($sku_name){
        $data = DB::table('sku')->where('sku_name',$sku_name)->get();
        return $data;
    }

}
