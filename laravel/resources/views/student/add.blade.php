<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>录入信息</title>
</head>
<body>
<form action="{{url('student/add')}}" method="post" onsubmit="return checkFrom()">
    <table>
        <tr>
            <td>学生姓名:</td>
            <td>
                <input type="text" name="name" id="name" placeholder="三位以上" onblur="checkName()">
                <span id="nameId"></span>
            </td>
        </tr>
        <tr>
            <td>学号:</td>
            <td>
                <input type="text" name="num" id="num" placeholder="16位以上" onblur="checkNum()">
                <span id="numId"></span>
            </td>
        </tr>
        <tr>
            <td>电话</td>
            <td>
                <input type="text" name="tel" id="tel" placeholder="10位" onblur="checkTel()">
                <span id="telId"></span>
            </td>
        </tr>
        <tr>
            <td>QQ</td>
            <td>
                <input type="text" name="qq" id="qq" placeholder="10位" onblur="checkQq()">
                <span id="qqId"></span>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit"></td>
        </tr>
    </table>
</form>
</body>
</html>
<script>
    function checkName(){
        var name = document.getElementById('name').value;
        var nameId = document.getElementById('nameId');
        var reg = /^\d{3,}$/;
        if(reg.test(name)){
            nameId.innerHTML = '正确'.fontcolor('green');
            return true;
        }else{
            nameId.innerHTML = '错误'.fontcolor('red');
            return false;
        }
    }
    function checkNum(){
        var num = document.getElementById('num').value;
        var numId = document.getElementById('numId');
        var reg = /^\d{9,}$/;
        if(reg.test(num)){
            numId.innerHTML = '正确'.fontcolor('green');
            return true;
        }else{
            numId.innerHTML = '错误'.fontcolor('red');
            return false;
        }
    }
    function checkTel(){
        var tel = document.getElementById('tel').value;
        var telId = document.getElementById('telId');
        var reg = /^\d{10}$/;
        if(reg.test(tel)){
            telId.innerHTML = '正确'.fontcolor('green');
            return true;
        }else{
            telId.innerHTML = '错误'.fontcolor('red');
            return false;
        }
    }
    function checkQq(){
        var qq = document.getElementById('qq').value;
        var qqId = document.getElementById('qqId');
        var reg = /^\d{10}$/;
        if(reg.test(qq)){
            qqId.innerHTML = '正确'.fontcolor('green');
            return true;
        }else{
            qqId.innerHTML = '错误'.fontcolor('red');
            return false;
        }
    }
    function checkFrom(){
        var name = checkName();
        var num = checkNum();
        var tel = checkTel();
        var qq = checkQq();
        if(name&&num&&tel&&qq){
            return true;
        }else{
            return false;
        }
    }
</script>