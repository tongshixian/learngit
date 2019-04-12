@extends('admin_template')
@section('content')
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商品详情展示</title>
</head>
<body>
本商品({{$data[0]->name}})的详情是：
<br>
{{$data[0]->shop_desc}}
</body>
</html>
@endsection