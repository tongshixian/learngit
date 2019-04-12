<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    public function index() {
        $data['tasks'] = [
            [
                'name' => 'Design New Dashboard',
                'progress' => '87',
                'color' => 'danger'
            ],
            [
                'name' => 'Create Home Page',
                'progress' => '76',
                'color' => 'warning'
            ],
            [
                'name' => 'Some Other Task',
                'progress' => '32',
                'color' => 'success'
            ],
            [
                'name' => 'Start Building Website',
                'progress' => '56',
                'color' => 'info'
            ],
            [
                'name' => 'Develop an Awesome Algorithm',
                'progress' => '10',
                'color' => 'success'
            ]
        ];
        return view('test')->with($data);
    }
    public function setSession(){
        session(['key'=>'value
        ']);
        echo session('key');
    }
    public function setRedis(){
        Redis::set('name','tong');
        echo Redis::get('name');
    }
    public function setCookie(){
        setcookie('key','tong');
        echo $_COOKIE['key'];
    }
    //$url = http://docker-test.com/api/testShow/3
    public function get($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $head = curl_exec($ch);
        curl_close($ch);
        return $head;
    }
    public function curl(){
        $url = 'http://docker-test.com/api/testShow/3';
        return $this->get($url);
    }
    public function path(Request $request){
        echo $request->path();
    }

}