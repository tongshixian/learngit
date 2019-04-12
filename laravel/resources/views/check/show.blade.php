<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>展示商品审测</title>
</head>
<body>
<table border="1">
    <tr>
        <th>商品ID</th>
        <th>商品名称</th>
        <th>商品分类</th>
        <th>商品价格</th>
        <th>品牌</th>
        <th>图片</th>
        <th>描述</th>
        <th>状态</th>
        <th>操作</th>
    </tr>
    @foreach($data as $k=>$v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->shop_name}}</td>
            <td>{{$v->shop_type}}</td>
            <td>{{$v->shop_price}}</td>
            <td>{{$v->shop_blank}}</td>
            <td>
                <img src="/storage/{{$v->shop_image}}" alt="图片无法显示" width="50px" height="50px">
            </td>
            <td>{{$v->shop_desc}}</td>
            <td>
                @if($v->shop_static==0)
                    未审核
                @elseif($v->shop_static==1)
                    已审核
                @endif
            </td>
            <td>
                <a href="test?id={{$v->id}}">审核</a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>