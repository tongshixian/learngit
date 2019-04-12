<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class LoginController extends Controller
{
    //
    public function login(Request $request){
        $name = $request->input('name');
        $password = $request->input('password');
        if($name=='admin'&&$password=='123'){
            Redis::set('msg','success');
            return redirect('student/show');
        }
    }
}
