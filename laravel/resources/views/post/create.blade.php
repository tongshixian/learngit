<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加</title>
</head>
<body>
<form action="{{url('post/create')}}" method="post">
    {{csrf_field()}}
    <table>
        <tr>
            <td>昵称:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>班级:</td>
            <td><input type="text" name="class"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="增加"></td>
        </tr>
    </table>
</form>
</body>
</html>