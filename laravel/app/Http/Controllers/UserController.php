<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //RBAC操作接口
    public function createUser(Request $request){
        $user_name = $request->input('user_name');
        $role = $request->input('role');
        $power = $request->input('power');
        if($user_name==''||$role==''||$power==''){
            return response()->json(array('status'=>2,'coke'=>400,'msg'=>'字段为空或非法字符'));
        }
        $data['user_name'] = $user_name;
        $data['role'] = $role;
        $data['power'] = $power;
        User::createUser($data);
        return response()->json(array('status'=>1,'coke'=>200,'msg'=>'成功'));
    }
    //添加图书
    public function createBook(Request $request){
        $book_type = $request->input('book_type');
        $book_name = $request->input('book_name');
        if($book_type==''||$book_name==''){
            return response()->json(array('status'=>2,'coke'=>400,'msg'=>'字段为空或非法字符'));
        }
        $data['book_name'] = $book_name;
        $data['book_type'] = $book_type;
        $res = User::createBook($data);
        return response()->json(array('status'=>1,'coke'=>200,'msg'=>'成功'));
    }
    public function selectUser(Request $request){
        $user_name = $request->input('user_name');
        if($user_name==''){
            return response()->json(array('status'=>2,'coke'=>400,'msg'=>'字段为空或非法字符'));
        }
        $res = User::selectUser($user_name);
        return response()->json(array('status'=>1,'coke'=>200,'msg'=>'成功','data'=>$res));
    }
    //修改分类名称
    public function modify(Request $request){
        $type_id = $request->input('type_id');
        $type_name = $request->input('type_name');
        if($type_id==''||$type_name==''){
            return response()->json(array('status'=>2,'coke'=>400,'msg'=>'字段为空或非法字符'));
        }
        $data['type_name'] = $type_name;
        User::modify($type_id,$data);
        return response()->json(array('status'=>1,'coke'=>200,'msg'=>'修改成功'));
    }
}
