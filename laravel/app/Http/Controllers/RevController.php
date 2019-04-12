<?php

namespace App\Http\Controllers;




use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\View\View;

class RevController extends Controller
{
    public function create(Request $request){
        if($request->isMethod('get')){
            return view('rev.create');
        }else{
            $data = Input::all();
            $data['sex'] = 1;
            unset($data['_token']);
            $res = DB::table('news')->insert($data);
            if($res){
                return redirect('rev/show');
            }
        }
    }
    public function show(){
        $data = DB::table('news')->where('sex',1)->paginate(5);
        return \view('rev.show',['data'=>$data]);
    }
    public function del(){
        $id = Input::get('id');
        $res = DB::table('news')->where('id',$id)->update(['sex'=>0]);
        if($res){
            return redirect('rev/show');
        }
    }
}
