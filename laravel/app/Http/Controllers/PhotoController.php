<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
class PhotoController extends Controller
{
    //展示
    public function show(){
    	$data = Photo::show();
    	$list = Photo::alls();
    	return view('photo.show',['data'=>$data,'list'=>$list]);
    }
    //添加图片
    public function create(Request $request){
    	$path = $request->file('image')->store('avatars','public');
    	$data = array();
    	$data['image'] = $path;
    	$result = Photo::create($data);
    	if($result){
    		return redirect('/prompt')->with(['message'=>'添加成功,即将跳转到展示页面','url'=>'/photo/show','jumpTime'=>3,'status'=>'success']);
    	}else{
    		return redirect('/prompt')->with(['message'=>'添加失败,即将跳转到展示页面','url'=>'/photo/show','jumpTime'=>3,'status'=>'error']);
    	}
    }
    public function index(Request $request){
        if($request->isMethod('get')){
            echo 1;
        }else{
            echo 2;
        }
    }

}
