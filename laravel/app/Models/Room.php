<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Room extends Model
{
    //查询
    static public function show(){
        $data = DB::table('flat_room')
            ->join('flat_apartment', 'flat_room.apartment_id', '=', 'flat_apartment.id')
            ->get();
        return $data;
    }
    //添加
    static public function add(&$data){
        $result = DB::table('flat_room')->insert($data);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    //删除
    static public function del($id){
        $result = DB::table('flat_room')->where('room_id',$id)->delete();
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
