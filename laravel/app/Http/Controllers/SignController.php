<?php

namespace App\Http\Controllers;

use App\Models\Sign;
use Illuminate\Http\Request;

class SignController extends Controller
{
    //
    public function signIn(){
        return view('sign.signIn');
    }
    public function admin(Request $request){
        $username = $request->input('username');
        $data = Sign::find($username);
        if($data){
            $sign_time=$data->sign_time;
            $sign_time=strtotime($sign_time);
            $int=date('Y-m-d');
            $int=strtotime($int);//5
            $ints=$int+86400;  //6
            $int_s=$int-86400;  //4
            //当天已签到
            if($int<$sign_time&&$sign_time<$ints){
//                 echo '您已签到';
                echo json_encode(array('success'=>2,'msg'=>'您已签到'));exit;
            }
            //昨天未签到，积分，天数在签到修改为1
            if($sign_time<$int_s){
                $count=$data->count + 1;
                $point=1;
                $score = $data->score + $point;
                $sign_time=date('Y-m-d H:s:i');
                $data = array();
                $data['count'] = $count;
                $data['point']=$point;
                $data['score'] = $score;
                $data['sign_time']=$sign_time;
                Sign::modify($username,$data);
//                 echo '签到成功修改为1';
            }
            //请签到
            if($int_s<$sign_time&&$sign_time<$int){
                $count=$data->count + 1;
                $point=$data->point + 1;
                $score = $data->score + $point;
                $sign_time=date('Y-m-d H:s:i');
                $data = array();
                $data['count']=$count;
                $data['point']=$point;
                $data['score'] = $score;
                $data['sign_time']=$sign_time;
                Sign::modify($username,$data);
//                 echo '签到成功+1';
            }
        }else{
            $count=1;
            $point=1;
            $score =$point;
            $sign_time=date('Y-m-d H:s:i');
            $data['username'] = $username;
            $data['count'] = $count;
            $data['point'] = $point;
            $data['score'] = $score;
            $data['sign_time'] = $sign_time;
            Sign::create($data);
//             echo '恭喜你签到成功----1';
        }
        //////////////////////响应
        $info = Sign::find($username);
        echo json_encode(array('success'=>1,'msg'=>$info));
    }
}
