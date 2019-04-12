<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function get($url){
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        // 4. 释放curl句柄
        curl_close($ch);
        return $output;
    }
    public function collect(){
        $url = "http://news.ifeng.com/mainland/";
        $title = '#<a href="(.*)" target="_blank" title="(.*)" class="js_url js_title">(.*)</a>#';
//        $content ='#<div class="con">(.*?)</div>#';
        $result = $this->curl($url);
        $info = array();
        preg_match_all($title,$result,$data);
//        preg_match_all($content,$result,$info);
//        unset($data[0]);unset($info[0]);
        print_r($data[2]);die;
    }
    public function queryList(){
        $url = "http://news.ifeng.com/mainland/";
        $rules = array(
            //采集id为one这个元素里面的纯文本内容
            'text' => array('.js_url js_title','text'),

        );
        $data = \QL\QueryList::Query($url)
            ->rules($rules)
            ->query()
            ->getData();
        print_r($data->all());
    }

    public function curl($url)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($curl);
//        curl_close($curl);
        return $result;
    }

    public function test()
    {
        $url = "https://www.csdn.net/";
        $title = '#<h2><a href="(.*)" target="_blank">(.*) </a></h2>#';
        $result = $this->curl($url);
        preg_match_all($title,$result,$data);
        print_r($data);exit;
    }
}
