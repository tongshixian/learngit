<?php

namespace App\Http\Controllers;

use App\Models\FlatSku;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Curl;
use Illuminate\Support\Facades\DB;

class FlatSkuController extends Controller
{
    public function create(Request $request){
        if($request->isMethod('get')){
            $info = Room::show();
            return view('flatSku.create',['info'=>$info]);
        }else{
            $data = $request->input();
            $data['sku_num'] = str_random(32);
            $result = FlatSku::create($data);
            if($result){
                echo 1;
            }else{
                echo 2;
            }
        }
    }
    public function show(){
        $data = FlatSku::show();
        return view('flatSku.show',['data'=>$data]);
    }
    public function test(){
//        Curl::curl('https://www.baidu.com/');
//        return $this->get('www.baidu.com');
        $url = "http://docker-test.com/flatSku/show";
        return $this->curl($url);
    }
    public function curl($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $head = curl_exec($ch);
        curl_close($ch);
        return $head;
    }
    public function get($url){
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        // 4. 释放curl句柄
        curl_close($ch);
        return $output;
    }
    public function testShow($id){
        $data = DB::table('week1_shop')->where('id',$id)->get();
        $info = [
          'code'=>200,
          'message'=>'success',
          'data'=>$data
        ];
        return response()->json($info);
    }
}
