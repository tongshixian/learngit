<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    //公寓添加
    public function add(Request $request){
        if($request->isMethod('get')){
            return view('apartment.add');
        }else{
            $data = $request->input();
            $data['create_at'] = time();
            $data['update_at'] = time();
            $result = Apartment::add($data);
            if($result){
                return redirect('/prompt')->with(['message'=>'添加成功,正在跳转公寓首页','url'=>'apartment/show','jumpTime'=>3,'status'=>'success']);
            }else{
                return redirect('/prompt')->with(['message'=>'添加失败,正在跳转公寓首页','url'=>'apartment/show','jumpTime'=>3,'status'=>'error']);
            }
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(){
        $data = Apartment::show();
        return view('apartment.show',['data'=>$data]);
    }
}
