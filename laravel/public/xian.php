<?php
/**
 * Created by PhpStorm.
 * User: 童士献
 * Date: 2019/3/18
 * Time: 10:23
 */
class signature{
    private function checkSignature()
    {
        _GET["signature"];
        _GET["timestamp"];
        _GET["nonce"];

        tmpArr = array(timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( signature ){
            return true;
        }else{
            return false;
        }
    }
}