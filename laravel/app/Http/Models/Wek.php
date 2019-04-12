<?php
/**
 * Created by PhpStorm.
 * User: 童士献
 * Date: 2019/2/18
 * Time: 18:38
 */
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Wek extends Model{
    public function show(){
        $data = DB::table('wek')->paginate(5);
        return $data;
    }
}