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
        <th>姓名</th>
        <th>班级</th>
        <th>编辑</th>
    </tr>
    @foreach($data as $k=>$l)
        <tr>
            <td>{{$l->id}}</td>
            <td>{{$l->name}}</td>
            <td>{{$l->class}}</td>
            <td><a href="del?id={{$l->id}}">伪删除</a></td>
        </tr>
    @endforeach
</table>
<p>
    {{$data->links()}}
</p>

</body>
</html>