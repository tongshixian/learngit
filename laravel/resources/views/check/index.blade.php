<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商品审测首页</title>
</head>
<body>
<form action="{{url('check/index')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <table>
        <tr>
            <td>商品名称:</td>
            <td><input type="text" name="shop_name"></td>
        </tr>
        <tr>
            <td>商品分类:</td>
            <td>
                <select name="shop_type" id="">
                    <option value="水果">水果</option>
                    <option value="家具">家具</option>
                    <option value="数码">数码</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>商品价格:</td>
            <td><input type="text" name="shop_price"></td>
        </tr>
        <tr>
            <td>品牌:</td>
            <td>
                <select name="shop_blank" id="">
                    <option value="红富士">红富士</option>
                    <option value="唐麦">唐麦</option>
                    <option value="华为">华为</option>
                </select>
                图片: <input type="file" name="shop_image">
            </td>
        </tr>
        <tr>
            <td>描述:</td>
            <td>
                <textarea name="shop_desc" id="" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="提交审核"></td>
        </tr>
    </table>
</form>
<br>
</body>
</html>