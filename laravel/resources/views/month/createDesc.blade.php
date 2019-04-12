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
<form action="{{url('month/createDesc')}}" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>评价</td>
            <td><input type="text" name="desc_name"></td>
        </tr>
        <tr>
            <td>图片</td>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="user_name" value="{{$user_name}}">
                <input type="hidden" name="shop_id" value="{{$shop_id}}">
            </td>
            <td><input type="submit" value="评价"></td>
        </tr>
    </table>
</form>
</body>
</html>
@endsection