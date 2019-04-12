<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>销售合同数据示例</title>
</head>
<body>
<table align="center">
    <p align="center">销售合同数据示例</p>
    <tr>
        <th>id</th>
        <th>下单时间</th>
        <th>姓名</th>
        <th>产品名称</th>
        <th>合同金额</th>
        <th>付款方式</th>
        <th>物流方式</th>
        <th>状态</th>
        <th>合同编号</th>
        <th>操作</th>
    </tr>
    @foreach($data as $k=>$v)
        <tr>
            <td>{{$v->sale_id}}</td>
            <td>{{$v->order_time}}</td>
            <td>{{$v->sale_name}}</td>
            <td>{{$v->product_name}}</td>
            <td>{{$v->contract_amount}}</td>
            <td>{{$v->payment_method}}</td>
            <td>{{$v->logistics_mode}}</td>
            <td>{{$v->status}}</td>
            <td>{{$v->contract_number}}</td>
            <td>
                <a href="{{url('sale/del')}}?contract_number={{$v->contract_number}}">删除</a>
                <a href="{{url('sale/modify')}}?contract_number={{$v->contract_number}}">修改</a>
            </td>
        </tr>    
    @endforeach
</table>
</body>
</html>