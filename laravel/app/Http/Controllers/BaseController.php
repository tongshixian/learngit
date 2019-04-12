<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    //
    public function __construct(Request $request){
        $url = $request->path();
        var_dump($url);
    }

    public function base(Request $request){
        $url = $request->path();
        var_dump($url);
    }
}
