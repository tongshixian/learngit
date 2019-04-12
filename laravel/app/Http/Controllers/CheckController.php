<?php

namespace App\Http\Controllers;

use App\Models\Check;
use Illuminate\Http\Request;
use QL\QueryList;

class CheckController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('get')){
            return view('check.index');
        }else{
            $data = $request->all();
            unset($data['_token']);
            $path = $request->file('shop_image')->store('avatars','public');
            $data['shop_image'] = $path;
            $data['shop_static'] = 0;
            $obj = new Check();
            $res = $obj->add($data);
            if($res){
                return redirect('check/show');
            }else{
                return redirect('check/index');
            }
        }
    }
    public function show(){
        $obj = new Check();
        $data = $obj->show();
        return view('check.show',['data'=>$data]);
    }
    public function test(Request $request){
        $id = $request->input('id');
        $obj = new Check();
        $res = $obj->up($id);
        if($res){
            return redirect('/prompt')->with(['message'=>'审核成功，即将跳转到后台首页','url' =>'/check/show', 'jumpTime'=>3,'status'=>'success']);
        }else{
            echo ("<script>alert('审核失败！');location='/check/show'</script>");
        }
    }
    public function collect(){
        //待采集的目标页面，PHPHub教程区
        $page = 'http://news.ifeng.com/mainland/';
        //采集规则
        $rules = array(
            //文章标题
            'title' => ['p;>a','text'],
            'data' => ['.ping03>span','text'],
            'image' => ['.clearfix>.ju_pic>a>img','src']
        );
        $data = QueryList::get($page)->rules($rules)->range('.juti_list')->query()->getData();
        //打印结果
        print_r($data->all());
    }
}
