<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>信息展示</title>
</head>
<body>
<table border="1">
    <tr>
        <th>ID</th>
        <th>姓名</th>
        <th>学号</th>
        <th>QQ</th>
        <th>编辑</th>
    </tr>
    @foreach($data as $k=>$v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td>{{$v->num}}</td>
            <td>{{$v->qq}}</td>
            <td>
                <a href="up?id={{$v->id}}">修改</a>
                <a href="del?id={{$v->id}}">删除</a>
            </td>
        </tr>
    @endforeach
    <button><a href="random">随机抽取学生</a></button>
</table>
</body>
</html>