<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>展示</title>
</head>
<body>
<table border="1">
    <tr>
        <th>ID</th>
        <th>名字</th>
        <th>名字</th>
        <th>编辑</th>
    </tr>
    @foreach($data as $k=>$v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td><img src="/storage/{{$v->avatar}}" alt="" width="50px" height="50px"></td>
            <td>
                <a href="del?id={{$v->id}}">删除</a>|
                <a href="up?id={{$v->id}}">修改</a>|
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>