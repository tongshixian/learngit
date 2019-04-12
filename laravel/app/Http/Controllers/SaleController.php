<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    //销售合同数据示例
    public function show(){
        $data = Sale::show();
        return view('sale.show',['data'=>$data]);
    }
    //根据合同编号修改合同数据
    public function modify(Request $request){
        if($request->isMethod('get')){
            $contract_number = $request->input('contract_number');
            $data = Sale::selectId($contract_number);
            return view('sale.modify',['data'=>$data]);
        }else{
            $data = $request->input();
            $contract_number = $data['contract_number'];
            unset($data['contract_number']);
            $result = Sale::modify($contract_number,$data);
            if($result){
                return redirect('/prompt')->with(['message'=>'修改成功,即将跳转到展示页面','url'=>'/sale/show','jumpTime'=>3,'status'=>'success']);
            }else{
                return redirect('/prompt')->with(['message'=>'修改失败,即将跳转到展示页面','url'=>'/sale/show','jumpTime'=>3,'status'=>'error']);
            }
        }

    }
    //根据合同编号删除合同数据
    public function del(Request $request){
        $contract_number = $request->input('contract_number');
        $result = Sale::del($contract_number);
        if($result){
            return redirect('/prompt')->with(['message'=>'删除成功,即将跳转到展示页面','url'=>'/sale/show','jumpTime'=>3,'status'=>'success']);
        }else{
            return redirect('/prompt')->with(['message'=>'删除失败,即将跳转到展示页面','url'=>'/sale/show','jumpTime'=>3,'status'=>'error']);
        }
    }
}
