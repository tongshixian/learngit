<?php

namespace App\Http\Controllers\Learn;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AjaxController extends Controller
{
    /**
     * ajax接口
     * @param Request $request
     */
    public function test(Request $request)
    {
        /*
        $data['tel']=$request->all('tel');
        $data['sex']=$request->all('sex');
        $data['name']=$request->all('name');
        */
//        echo json_encode($_GET);
        echo json_encode($_POST);
    }

    public function testView()
    {
        return view('testview');
    }
}
