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
<form action="{{url('wek/create')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <table>
        <tr>
            <td>姓名</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="file" name="avatar"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit"></td>
        </tr>

    </table>
</form>
</body>
</html>