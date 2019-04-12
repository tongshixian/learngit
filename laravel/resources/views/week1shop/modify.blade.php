@extends('admin_template')
@section('content')
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商品修改</title>
</head>
<body>
<form action="{{url('week1shop/modify')}}" method="post" enctype="multipart/form-data">
    <table border="1">
        <tr>
            <td>商品名称:</td>
            <td><input type="text" name="name" value="{{$data[0]->name}}"></td>
        </tr>
        <tr>
            <td>商品价格:</td>
            <td><input type="text" name="price" value="{{$data[0]->price}}"></td>
        </tr>
        <tr>
            <td>商品描述:</td>
            <td>
                <textarea name="shop_desc" id="" cols="30" rows="10">{{$data[0]->shop_desc}}</textarea>
            </td>
        </tr>
        <tr>
            <td>商品图片:</td>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value="{{$data[0]->id}}"></td>
            <td><input type="submit" value="修改商品"></td>
        </tr>
    </table>
</form>
</body>
</html>
@endsection