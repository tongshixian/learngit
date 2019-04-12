<?php

namespace App\Http\Controllers;

use App\Models\FlatType;
use App\Models\Room;
use Illuminate\Http\Request;

class FlatTypeController extends Controller
{
    public function create(Request $request){
        if($request->isMethod('get')){
            $data = Room::show();
            return view('flatType.create',['info'=>$data]);
        }else{
            $data = $request->input();
            $data['created_at'] = time();
            $result = FlatType::create($data);
            if($result){
                echo 1;
            }else{
                echo 2;
            }
        }
    }
    public function show(){
        $data = FlatType::show();
        return view('flatType.show',['data'=>$data]);
    }
}
