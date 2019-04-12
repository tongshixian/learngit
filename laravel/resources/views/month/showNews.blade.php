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
        <th>用户名称</th>
        <th>邮箱</th>
        <th>电话</th>
        <th>爱好</th>
        <th>性别</th>
        <th>签名</th>
    </tr>
    @foreach($data as $k=>$v)
        <tr>
            <td>{{$v->user_name}}</td>
            <td>{{$v->smail}}</td>
            <td>{{$v->tel}}</td>
            <td>{{$v->hoby}}</td>
            <td>{{$v->sex}}</td>
            <td>{{$v->sign}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
@endsection