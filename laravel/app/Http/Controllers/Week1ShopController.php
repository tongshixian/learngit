<?php

namespace App\Http\Controllers;

use App\Models\Week1Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Week1ShopController extends Controller
{
    //添加
    public function add(Request $request){
        if($request->isMethod('get')){
            $token = md5(time());
            $request->session()->put('token',$token);

            return view('week1shop.add');
        }else{
            $data = $request->input();
//            $path = $request->file('image')->store('avatars','public');
            $data['image'] = '';
            $data['created_time'] = time();
            $data['update_time'] = time();
            if(empty($request->session()->get('token'))) {
                return response('请勿重复提交', 403);
            }
            $result = Week1Shop::add($data);
            $request->session()->pull('token', null);
//            return response('提交成功', 200);
            if($result){
                return redirect('/prompt')->with(['message'=>'添加成功,正在跳往展示首页','url'=>'week1shop/show','jumpTime'=>3,'status'=>'success']);
            }else{
                return redirect('/prompt')->with(['message'=>'添加失败,正在跳往展示首页','url'=>'week1shop/show','jumpTime'=>3,'status'=>'error']);
            }
        }
    }
    //展示
    public function show(){
        $data = Week1Shop::show();
        return view('week1shop.show',['data'=>$data]);
    }
    //修改
    public function modify(Request $request){
        if($request->isMethod('get')){
            $id = $request->input('id');
            $data = Week1Shop::modifyById($id);
            return view('week1shop.modify',['data'=>$data]);
        }else{
            $data = $request->input();
            $path = $request->file('image')->store('avatars','public');
            $data['image'] = $path;
            $data['update_time'] = time();
            $id = $data['id'];
            unset($data['id']);
            $result = Week1Shop::modify($id,$data);
            if($result){
                return redirect('/prompt')->with(['message'=>'修改成功,正在跳往展示首页','url'=>'week1shop/show','jumpTime'=>3,'status'=>'success']);
            }else{
                return redirect('/prompt')->with(['message'=>'修改失败,正在跳往展示首页','url'=>'week1shop/show','jumpTime'=>3,'status'=>'error']);
            }
        }
    }
    //删除
    public function del(Request $request){
        $id = $request->input('id');
        $result = Week1Shop::del($id);
        if($result){
            return redirect('/prompt')->with(['message'=>'删除成功,正在跳往展示首页','url'=>'week1shop/show','jumpTime'=>3,'status'=>'success']);
        }else{
            return redirect('/prompt')->with(['message'=>'删除失败,正在跳往展示首页','url'=>'week1shop/show','jumpTime'=>3,'status'=>'error']);
        }
    }
    //详情
    public function shopDesc(Request $request){
        $id = $request->input('id');
        $data = Week1Shop::modifyById($id);
        return view('week1shop.shopDesc',['data'=>$data]);
    }
}
