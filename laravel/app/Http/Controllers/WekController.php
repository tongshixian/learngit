<?php

namespace App\Http\Controllers;




use App\Http\Models\Wek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class WekController extends Controller
{
    //添加
    public function create(Request $request){
        //判断请求方式
        if($request->isMethod('get')){
            return \view('wek/create');
        }else{
            $data = Input::all();
            unset($data['_token']);
            $path = $request->file('avatar')->store('avatars','public');
            $data['avatar']=$path;
            //入库添加
            $res = DB::table('wek')->insert($data);
            if($res){
                return redirect('wek/show');
            }
        }
    }
    //展示
    public function show(){
        $res = new Wek();
        $data = $res->show();
        return \view('wek/show',['data'=>$data]);
    }
    //删除
    public function del(){
        //接收id值
        $id = Input::get('id');
        $res = DB::table('wek')->delete();
        if($res){
            return redirect('wek/show');
        }
    }
    //修改
    public function up(){
        $id = Input::get('id');
        $res = DB::table('wek')->where('id',$id)->update(['name'=>'已修改']);
        if($res){
            return redirect('wek/show');
        }
    }
}
