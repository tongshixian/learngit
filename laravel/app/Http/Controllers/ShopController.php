<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //商品属性
    public function shopType(Request $request){
        $shop_id = $request->input('shop_id');
        $data = Shop::shopType($shop_id);
        return response()->json(array('success'=>1,'data'=>$data));
    }
    //商品展示
    public function show(Request $request){
        $shop_id = $request->input('shop_id');
        $data = Shop::show($shop_id);
        return view('shop.show',['data'=>$data]);
    }
    //sku选择
    public function select(Request $request){
        $sku_name = $request->input('sku_name');
        $data = Shop::select($sku_name);
        return response()->json(['price'=>$data[0]->price]);
    }
}
