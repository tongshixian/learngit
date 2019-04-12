<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
随机抽到的学生是{{$data->name}}
<form action="{{url('student/fen')}}" method="post">
    分数:
    <input type="text" name="fen">
    <input type="hidden" name="name" value="{{$data->name}}">
    <input type="submit">
</form>
</body>
</html>