<?php

namespace App\Http\Controllers\Framework;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NarcissusController extends Controller
{
    public function index(){
        $m = 100;
        $n = 999;
        for ($i=$m;$i<=$n;$i++){
            $b = $i%10;
            $c = ($i%100-$b)/10;
            $d = floor($i/100);
            $num = pow($b,3)+pow($c,3)+pow($d,3);
            if($i==$num){
                echo $num.'<br>';
            }
        }

    }
}
