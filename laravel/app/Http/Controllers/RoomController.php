<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    //房间展示
    public function show(){
        $data = Room::show();
        return view('room.show',['data'=>$data]);
    }
    //公寓添加
    public function add(Request $request){
        if($request->isMethod('get')){
            $info = Apartment::show();
            return view('room.add',['info'=>$info]);
        }else{
            $data = $request->input();
            $data['room']=$data['apartment_id'].'-'.$data['room'];
            $path = $request->file('image')->store('avatars','public');
            $data['image'] = $path;
            $data['created_at'] = time();
            $data['updated_at'] = time();
            $result = Room::add($data);
            if($result){
                return redirect('/prompt')->with(['message'=>'添加成功,正在跳转公寓首页','url'=>'room/show','jumpTime'=>3,'status'=>'success']);
            }else{
                return redirect('/prompt')->with(['message'=>'添加失败,正在跳转公寓首页','url'=>'room/show','jumpTime'=>3,'status'=>'error']);
            }
        }
    }
    //公寓删除
    public function del(Request $request){
        $id = $request->input('id');
        $image = $request->input('image');
        $image = substr($image,8);
        $result = Room::del($id);
        if($image!=''){
            unlink("storage/avatars/$image");
        }
        if($result){
            return redirect('/prompt')->with(['message'=>'删除成功,正在跳转公寓首页','url'=>'room/show','jumpTime'=>3,'status'=>'success']);
        }else{
            return redirect('/prompt')->with(['message'=>'删除失败,正在跳转公寓首页','url'=>'room/show','jumpTime'=>3,'status'=>'error']);
        }
    }
}
