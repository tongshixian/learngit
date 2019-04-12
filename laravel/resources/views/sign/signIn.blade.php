<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP签到系统</title>
</head>
<body>
<center>
<input type="text" name="username">
<button>签到</button><span id="span"></span>
<div>
    <table border="1" id="box"></table>
</div>
</center>
</body>
</html>
<script type="text/javascript" src="{{URL::asset('js/jquery.js') }}"></script>
<script>
    $(function () {
        $('button').click(function () {
            var username = $(':text').val();
            $.ajax({
                type:'get',
                url:'{{url('sign/admin')}}',
                data:{username:username},
                dataType:'json',
                success:function (res) {
                    if(res.success==1){
                        $('#span').html('签到成功');
                        var str='<tr><td>用户名</td><td>签到总天数</td><td>连续签到天数</td><td>总积分</td></tr>';
                        str+='<tr><td>'+res.msg.username+'</td><td>'+res.msg.count+'</td><td>'+res.msg.point+'</td><td>'+res.msg.score+'</td></tr>';
                        $('#box').html(str);
                    }
                    if(res.success==2){
                        alert(res.msg);
                    }
                }
            })
        })
    })
</script>