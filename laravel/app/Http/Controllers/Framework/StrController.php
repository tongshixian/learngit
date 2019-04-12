<?php

namespace App\Http\Controllers\Framework;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StrController extends Controller
{
    public function index(){
        $str = 'HavE you Ever gone shopping and';
        $str = preg_replace('# #','',$str);
        for ($i=0;$i<=strlen($str);$i++){
            if(substr_count($str,substr($str,$i,1))>=3){
                echo  substr($str,$i,1);exit;
            }
        }
    }
    public function test(){
        $str = "The string ends in escape:";
        count_chars($str);
    }
}
