<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商品展示</title>
</head>
<body>
<table>
    <tr>
        <td>商品名称:</td>
        <td>{{$data[0]->shop_name}}</td>
    </tr>

    <tr>
        <td>商品详情:</td>
        <td>
            <textarea name="" id="" cols="30" rows="10">
                {{$data[0]->shop_desc}}
            </textarea>
        </td>
    </tr>
    <tr>
        <td>sku属性:</td>
    </tr>
    <tbody>
    </tbody>
</table>
</body>
</html>
<script src="{{URL::asset('js/jquery.js')}}"></script>
<script>
    $(function () {
        $('tbody').html();
        $.ajax({
            url:'http://www.laravel5.com/shop/shopType?shop_id=2',
            type:'get',
            success:function (res) {

                if(res.success==1){
                    $(res.data).each(function (key,val) {
                        var str="";
                        str +="<td><input type='checkbox'>"+val.type_name+"</td>";
                        str +="";
                        $('tbody').append(str);
                    })
                }
            }
        })
    })
</script>