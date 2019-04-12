@extends('admin_template')
@section('content')
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户</title>
</head>
<body>
欢迎{{$data[0]->user_name}}登陆    个人积分为{{$data[0]->score}} <a href="{{url('month/up')}}?user_name={{$data[0]->user_name}}">签到</a>
<a href="{{url('month/news')}}?user_name={{$data[0]->user_name}}">完善个人信息</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>商品名称</th>
        <th>商品价格</th>
        <th>操作</th>
    </tr>
    @foreach($info as $k=>$v)
        <tr>
            <td>{{$v->shop_id}}</td>
            <td>{{$v->shop_name}}</td>
            <td>{{$v->shop_price}}</td>
            <td>
                <a href="{{url('month/buy')}}?shop_id={{$v->shop_id}}&user_name={{$data[0]->user_name}}&shop_price={{$v->shop_price}}">购买</a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
@endsection