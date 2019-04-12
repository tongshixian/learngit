@extends('admin_template')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>房间SKU属性添加</title>
</head>
<body>
<div>
    <!-- Left side column. contains the logo and sidebar -->

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Flat_Attribute_SKU</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{url('flatSku/create')}}" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Attribute Sku</label>
                                    <input type="text" name="sku" class="form-control"  placeholder="Enter name">
                                </div>
                            </div><!-- /.box-body -->
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sku Price</label>
                                    <input type="text" name="sku_price" class="form-control"  placeholder="Enter name">
                                </div>
                            </div>
                            <div class="box-body">
                                <label>Room</label>
                                <select class="form-control" name="room_id">
                                    @foreach($info as $k=>$v)
                                        <option value="{{$v->room_id}}">{{$v->room}}</option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div><!-- /.box -->

                </div><!--/.col (left) -->
            </div>   <!-- /.row -->
        </section><!-- /.content -->
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->
<!-- jQuery 2.0.2 -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="../../js/AdminLTE/app.js" type="text/javascript"></script>
</body>
</html>
@endsection