<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

//use Request;

class PostController extends Controller
{
    public function create(Request $request){
        if($request->isMethod('get')){
            if(!View::exists('post.create')){
                echo "<script>alert('改模板不存在')</script>";
            }
            return view('post.create');
        }else{
            $data = Input::all();
            $data['sex'] = 1;
            unset($data['_token']);
            $res = DB::table('news')->insert($data);
            if($res){
                return redirect('post/show');
            }
        }
    }
    public function show(){
        $data = DB::table('news')->where('sex',1)->paginate(2);
        return view('post.show',['data'=>$data]);
    }
    public function del(){
        $id = Input::get('id');
        $res = DB::table('news')->where('id',$id)->update(['sex'=>0]);
        if($res){
            return redirect('post/show');
        };
    }
}
