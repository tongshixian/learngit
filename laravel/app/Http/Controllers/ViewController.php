<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
class ViewController extends Controller
{
    //展示
    public function show(){
    	$result = Pages::show();
    	return view('pages.show',['data'=>$result]);
    }
    //分页
    public function pages(Request $request){
    	$page = $request->input('page');
    	$count = Pages::pageCount();
    	$limit = 5;
    	$num = ceil($count/$limit);
    	if($page>$num){
    		return false;
    	}
    	if($page<1){
    		return fasle;
    	}
    	$start = ($page-1)*$limit;
    	$data = Pages::pageLimit($start,$limit);
    	return response()->json(array('success'=>1,'data'=>$data));
    }
    //轮播图
    public function photo(){
        return view('view.photo');
    }

    public function test()
    {
        return view('test');
    }
}
