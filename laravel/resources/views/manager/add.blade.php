@extends('admin_template')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>公寓添加</title>
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
                            <h3 class="box-title">Apartment</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{url('apartment/add')}}" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Apartment name</label>
                                    <input type="text" name="apartment_name" class="form-control"  placeholder="Enter name">
                                </div>
                            </div><!-- /.box-body -->
                            <div class="form-group">
                                <label>Type</label>
                                <select class="form-control" name="type">
                                    <option value="1" selected="selected">集中式</option>
                                    <option value="2">分布式</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Is_open</label>
                                <select class="form-control" name="is_open">
                                    <option  value="1" selected="selected">开放</option>
                                    <option  value="2">未开放</option>
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