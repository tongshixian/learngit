<?php

namespace App\Http\Controllers;

use App\Models\FlatAttribute;
use App\Models\FlatType;
use Illuminate\Http\Request;

class FlatAttributeController extends Controller
{
    public function create(Request $request){
        if($request->isMethod('get')){
            $data = FlatType::show();
            return view('flatAttribute.create',['info'=>$data]);
        }else{
            $data = $request->input();
            $data['created_at'] = time();
            $result = FlatAttribute::create($data);
            if($result){
                echo 1;
            }else{
                echo 2;
            }
        }
    }
    public function show(){
        $data = FlatAttribute::show();
        return view('flatAttribute.show',['data'=>$data]);
    }
    public function createValue(Request $request){
        if($request->isMethod('get')){
            $data = FlatAttribute::show();
            return view('flatAttribute.createValue',['info'=>$data]);
        }else{
            $data = $request->input();
            $data['created_at'] = time();
            $result = FlatAttribute::createValue($data);
            if($result){
                echo 1;
            }else{
                echo 2;
            }
        }
    }
    public function showValue(){
        $data = FlatAttribute::showValue();
        return view('flatAttribute.showValue',['data'=>$data]);
    }
}
