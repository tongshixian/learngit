<?php

namespace App\Http\Controllers\Weinxin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //配置信息
    private function config(){
        return [
            'appID'=>'wxb7809a460e385e2b',
            'appsecret'=>'911a6aa2848c2d657d1c9b4ddb826c28',
        ];
    }
    /**
     * 微信测试（csrf....）
     */
    public function index()
    {
        //获取access_token
        $access_token=$this->getAccesToken();
        //获取菜单
        $menus=$this->getMenu($access_token);
        dd($menus);
    }

    /**
     * 获取access_token(有效2小时，要做缓存)
     */
    public function getAccesToken()
    {
        $config=$this->config();
        $access_token_url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$config['appID']}&secret={$config['appsecret']}";

        //网络请求
       $return_data=file_get_contents($access_token_url);



        $arr=json_decode($return_data,true);
        return $arr['access_token'];
    }

    /**
     * 获取菜单
     */
    public function getMenu($access_token)
    {
        $get_menu_url="https://api.weixin.qq.com/cgi-bin/menu/get?access_token={$access_token}";
        //网络请求
        $return_data=file_get_contents($get_menu_url);



        $arr=json_decode($return_data,true);
        return $arr;
    }

    public function sendTplMessage()
    {
        $data='{
           "touser":"ogdmb1fXAuqWwGUXrrS3CD-9w2w4",
           "template_id":"ZPt7mDkLEwuWiec3z1lCA60MwUGFhSAS_NwvnJ2zmXY",
           "url":"http://www.baidu.com",         
           "data":{
                   "nickname": {
                       "value":"张三"
                   },
                   "minute":{
                       "value":"20"
                   }
           }
       }';
    }
}
