<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>根据合同编号修改合同数据</title>
</head>
<body>
<form action="{{url('sale/modify')}}" method="post">
    <table>
        <tr>
            <td>下单时间:</td>
            <td><input type="text" name="order_time" value="{{$data[0]->order_time}}"></td>
        </tr>
        <tr>
            <td>姓名:</td>
            <td><input type="text" name="sale_name" value="{{$data[0]->sale_name}}"></td>
        </tr>
        <tr>
            <td>产品名称:</td>
            <td><input type="text" name="product_name" value="{{$data[0]->product_name}}"></td>
        </tr>
        <tr>
            <td>合同金额:</td>
            <td><input type="text" name="contract_amount" value="{{$data[0]->contract_amount}}"></td>
        </tr>
        <tr>
            <td>付款方式:</td>
            <td><input type="text" name="payment_method" value="{{$data[0]->payment_method}}"></td>
        </tr>
        <tr>
            <td>物流方式:</td>
            <td><input type="text" name="logistics_mode" value="{{$data[0]->logistics_mode}}"></td>
        </tr>
        <tr>
            <td>状态:</td>
            <td><input type="text" name="status" value="{{$data[0]->status}}"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="contract_number" value="{{$data[0]->contract_number}}"></td>
            <td><input type="submit" value="修改"></td>
        </tr>
    </table>
</form>
</body>
</html>