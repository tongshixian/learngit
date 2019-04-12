<?php

namespace App\Http\Controllers;

use App\Models\Month;
use Illuminate\Http\Request;

class MonthController extends Controller
{
    /**
     * 注册用户
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function create(Request $request){
        if($request->isMethod('get')){
            return view('month.create');
        }else{
            $data = $request->input();
            if($data['user_name']==''){
                return redirect('/prompt')->with(['message'=>'用户名为空','url'=>'month/create','jumpTime'=>3,'status'=>'error']);
            }
            if($data['pwd']==''){
                return redirect('/prompt')->with(['message'=>'密码为空','url'=>'month/create','jumpTime'=>3,'status'=>'error']);
            }
            $data['score']=300;
            $data['status']=1;
            $result = Month::create($data);
            if($result){
                session(['user_name'=>$data['user_name']]);
                return redirect('/prompt')->with(['message'=>'用户注册成功','url'=>'month/show','jumpTime'=>3,'status'=>'success']);
            }else{
                return redirect('/prompt')->with(['message'=>'用户注册失败','url'=>'month/create','jumpTime'=>3,'status'=>'error']);
            }
        }
    }
    public function show(Request $request){
        $user_name = $request->session()->get('user_name');

            $data = Month::show($user_name);
            $info = Month::shopShow();
            return view('month.show',['data'=>$data,'info'=>$info]);
    }
    //登录用户
    public function login(Request $request){
        $user_name = $request->session()->get('user_name');
        if($user_name){
            return redirect('/prompt')->with(['message'=>'登录成功','url'=>'month/show','jumpTime'=>3,'status'=>'success']);
        }else{
            if($request->isMethod('get')){
                return view('month.login');
            }else{
                $data = $request->input();
                $result = Month::login($data);
                if($result){
                    $info = Month::shopShow();
                    $data = Month::show($data['user_name']);
                    return view('month.show',['data'=>$data,'info'=>$info]);
                }else{
                    return redirect('/prompt')->with(['message'=>'登录失败','url'=>'month/login','jumpTime'=>3,'status'=>'error']);
                }
            }
        }
    }
    //签到
    public function up(Request $request){
        $user_name = $request->input('user_name');
        $data = Month::show($user_name);
        $score = $data[0]->score+1;
        $request = Month::up($user_name,$score);
        if($request){
            echo "签到成功";
        }else{
            echo "签到失败";
        }
    }
    public function buy(Request $request)
    {
        $data = $request->input();
        $result = Month::createOrder($data);
        if ($result) {
            return redirect('/prompt')->with(['message' => '请付款', 'url' => 'month/showOrder', 'jumpTime' => 3, 'status' => 'success']);
        }
    }
    public function showOrder(){
        $data = Month::showOrder();
        return view('month.showOrder',['data'=>$data]);
    }
    public function pay(Request $request){
        $order_id = $request->input('order_id');
        $result = Month::payUp($order_id);
        if($result){
            return redirect('/prompt')->with(['message' => '付款成功', 'url' => 'month/showOrder', 'jumpTime' => 3, 'status' => 'success']);
        }else{
            return redirect('/prompt')->with(['message' => '付款失败', 'url' => 'month/showOrder', 'jumpTime' => 3, 'status' => 'error']);
        }
    }
    public function showDesc(){
        $data = Month::showDesc();
        return view('month.showDesc',['data'=>$data]);
    }
    public function createDesc(Request $request){
        $user_name = $request->input('user_name');
        $shop_id = $request->input('shop_id');
        if($request->isMethod('get')){
            return view('month.createDesc',['user_name'=>$user_name,'shop_id'=>$shop_id]);
        }else{
            $data = $request->input();
            $path = $request->file('image')->store('avatars','public');
            $data['image'] = $path;
            $result = Month::createDesc($data);
            if($result){
                if($path){
                    $info = Month::show($data['user_name']);
                    $score = $info[0]->score+100;
                    $res = Month::up($data['user_name'],$score);
                    if($res){
                        return redirect('/prompt')->with(['message' => '评价成功', 'url' => 'month/showOrder', 'jumpTime' => 3, 'status' => 'success']);
                    }

                }else{
                    $data = Month::show($data['user_name']);
                    $score = $data[0]->score+20;
                    Month::up($data['user_name'],$score);
                    return redirect('/prompt')->with(['message' => '评价成功', 'url' => 'month/showOrder', 'jumpTime' => 3, 'status' => 'success']);
                }

            }else{
                return redirect('/prompt')->with(['message' => '评价失败', 'url' => 'month/showOrder', 'jumpTime' => 3, 'status' => 'error']);
            }
        }
    }
    public function descNo(Request $request){
        $user_name = $request->input('user_name');
        $shop_id = $request->input('shop_id');
        if($request->isMethod('get')){
            return view('month.createNo',['user_name'=>$user_name,'shop_id'=>$shop_id]);
        }else{
            $data = $request->input();
            $result = Month::createDesc($data);
            if($result){
                    $info = Month::show($data['user_name']);
                    $score = $info[0]->score+20;
                    Month::up($data['user_name'],$score);
                    return redirect('/prompt')->with(['message' => '评价成功', 'url' => 'month/showOrder', 'jumpTime' => 3, 'status' => 'success']);
                } else{
                return redirect('/prompt')->with(['message' => '评价失败', 'url' => 'month/showOrder', 'jumpTime' => 3, 'status' => 'error']);
            }
        }
    }
    public function news(Request $request){
        if($request->isMethod('get')){
            $user_name = $request->input('user_name');
            return view('month.news',['user_name'=>$user_name]);
        }else{
            $data = $request->input();
            return redirect('/prompt')->with(['message' => '添加成功', 'url' => 'month/showNews', 'jumpTime' => 3, 'status' => 'success']);
        }
    }
    public function showNews(){
        $data = Month::showNews();
        return view('month.showNews',['data'=>$data]);

    }
}
