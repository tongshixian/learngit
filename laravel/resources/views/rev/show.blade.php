<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>练习展示</title>
</head>
<body>
<table border="1">
    <tr>
        <th>ID</th>
        <th>姓名</th>
        <th>班级</th>
        <th>编辑</th>
    </tr>
    @foreach($data as $k=>$v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td>{{$v->class}}</td>
            <td>
                <a href="del?id={{$v->id}}">伪删除</a>
            </td>
        </tr>
    @endforeach
</table>
<p>
    {{$data->links()}}
</p>
</body>
</html>