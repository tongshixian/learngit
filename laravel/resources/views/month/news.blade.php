@extends('admin_template')
@section('content')
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册用户</title>
</head>
<body>
<form action="{{url('month/news')}}" method="post">
    <table>
        <tr>
            <td>用户名</td>
            <td><input type="text" name="user_name" value="{{$user_name}}"></td>
        </tr>
        <tr>
            <td>邮箱</td>
            <td><input type="text" name="smail"></td>
        </tr>
        <tr>
            <td>手机号</td>
            <td><input type="text" name="tel"></td>
        </tr>
        <tr>
            <td>个人爱好</td>
            <td><input type="text" name="hoby"></td>
        </tr>
        <tr>
            <td>性别</td>
            <td><input type="text" name="sex"></td>
        </tr>
        <tr>
            <td>签名</td>
            <td><input type="text" name="sign"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="完善信息"></td>
        </tr>
    </table>
</form>
</body>
</html>
@endsection