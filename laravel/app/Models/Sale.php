<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sale extends Model
{
    //销售合同数据示例
    static public function show(){
        $data = DB::table('sales_contract')->get();
        return $data;
    }
    //根据合同编号查找合同数据
    static public function selectId($contract_number){
        $data = DB::table('sales_contract')->where('contract_number',$contract_number)->get();
        return $data;
    }
    //根据合同编号修改合同数据
    static public function modify($contract_number,&$data){
        $result = DB::table('sales_contract')->where('contract_number',$contract_number)->update($data);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    //根据合同编号删除合同数据
    static public function del($contract_number){
        $result = DB::table('sales_contract')->where('contract_number',$contract_number)->delete();
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
