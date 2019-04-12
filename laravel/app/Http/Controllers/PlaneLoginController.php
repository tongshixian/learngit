<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class PlaneLoginController extends Controller
{
    //用户注册
    public function register(Request $request){
        if($request->isMethod('get')){
            return view('planeLogin.register');
        }else{
            $data = $request->all();
            $res = Admin::create($data);
            var_dump($res);exit;
        }
    }
    //用户登录
    public function login(Request $request){
        if($request->isMethod('get')){
            return view('planeLogin.login');
        }else{
            $data = $request->all();
            $res = Admin::findOne($data);
            var_dump($res);exit;

        }
    }
}
