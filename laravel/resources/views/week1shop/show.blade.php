@extends('admin_template')
@section('content')
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商品展示</title>
</head>
<body>
<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>商品名称</th>
        <th>商品价格</th>
        <th>商品图片</th>
        <th>操作</th>
    </tr>
    @foreach($data as $k=>$v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td>{{$v->price}}</td>
            <td>
                <img src="/storage/{{$v->image}}" width="50px" height="50px" alt="无法显示">
            </td>
            <td>
                <a href="del?id={{$v->id}}">删除</a>
                <a href="modify?id={{$v->id}}">修改</a>
                <a href="shopDesc?id={{$v->id}}">详情</a>
            </td>
        </tr>
    @endforeach
</table>
{{$data->links()}}
</body>
</html>
@endsection