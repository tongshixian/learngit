<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    //管理员展示
    public function show(){
        $data = Manager::show();
        return view('manager.show',['data'=>$data]);
    }
    //管理员添加
    public function add(Request $request){
        if($request->isMethod('get')){
            return view('manager.add');
        }else{
            echo 2;
        }
    }
}
