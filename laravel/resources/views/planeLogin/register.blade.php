<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户登录</title>
</head>
<body>
<form action="{{url('planeLogin/register')}}" method="post">
    <table>
        <tr>
            <td>用户名称:</td>
            <td><input type="text" name="admin_name"></td>
        </tr>
        <tr>
            <td>用户密码:</td>
            <td><input type="text" name="admin_pwd"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="注册"></td>
        </tr>
    </table>
</form>
</body>
</html>