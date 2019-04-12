<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PraApiController extends Controller
{
    //
    public function index(Request $request){
        $name = $request->input('name');
        echo $name;
    }
}
