<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Manager extends Model
{
    //管理员展示
    static public function show(){
        $data = DB::table('flat_manager')->get();
        return $data;
    }
}
