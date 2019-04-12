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
<table border="1">
    <tr>
        <th>ID</th>
        <th>用户名称</th>
        <th>商品名称</th>
        <th>商品价格</th>
        <th>状态</th>
        <th>操作</th>
    </tr>
    @foreach($data as $k=>$v)
        <tr>
            <td>{{$v->order_id}}</td>
            <td>{{$v->user_name}}</td>
            <td>{{$v->shop_id}}</td>
            <td>{{$v->shop_price}}</td>
            <td>{{$v->status}}</td>
            <td>
                <a href="{{url('month/createDesc')}}?user_name={{$v->user_name}}&shop_id={{$v->shop_id}}">点击评价</a>
                <a href="{{url('month/descNo')}}?user_name={{$v->user_name}}&shop_id={{$v->shop_id}}">点击无图评价</a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
@endsection