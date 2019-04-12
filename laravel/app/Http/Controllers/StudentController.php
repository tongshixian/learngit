<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class StudentController extends Controller
{


    //学生录入
    public function add(Request $request){
        if($request->isMethod('get')){
            return view('student.add');
        }else{
            $data['name'] = $request->input('name');
            $data['num'] = $request->input('num');
            $data['tel'] = $request->input('tel');
            $data['qq'] = $request->input('qq');
            $data['status']=1;
            $obj = new Student();
            $num = $obj->findOne($data['num']);
            //判断是否有学号重复的
            if($num){
                return redirect('student/add');
            }
            //入库
            $res = $obj->add($data);
            if($res){
                echo 1;
            }else{
                echo 2;
            }
        }
    }
    //展示
    public function show(){
        $msg = Redis::get('msg');
        if(!$msg){
            return redirect('login/login');
        }
        $obj = new Student();
        $data = $obj->showData();
        return view('student.show',['data'=>$data]);
    }
    //修改
    public function up(Request $request){
        $id = $request->input('id');
        $obj = new Student();
        $res = $obj->upData($id);
        if($res){
            return redirect('student/show');
        }else{
            return redirect('student/show');
        }
    }
    //删除
    public function del(Request $request){
        $id = $request->input('id');
        $obj = new Student();
        $res = $obj->delData($id);
        if($res){
            return redirect('student/show');
        }else{
            return redirect('student/show');
        }
    }
    public function random(){
        $obj = new Student();
        $res = $obj->rand();
        return view('student/cord',['data'=>$res]);
    }
    public function fen(Request $request){
        $fen = $request->input('fen');
        $name = $request->input('name');
        echo "姓名:".$name."分数:".$fen;
    }
}
