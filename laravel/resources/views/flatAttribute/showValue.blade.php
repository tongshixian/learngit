@extends('admin_template')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>类型值列表</title>
</head>
<body>
<div>
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">

        <!-- Main content -->
        <section class="content">
            <a href="{{url('flatAttribute/createValue')}}"><button type="button" class="btn btn-success">Create flatType Value</button></a>
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Responsive Hover Table</h3>
                            <div class="box-tools">
                                <div class="input-group">
                                    <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>AttributeVaule Name</th>
                                    <th>Attribute</th>
                                    <th>exit</th>
                                </tr>
                                @foreach($data as $k=>$v)
                                <tr>
                                    <td>{{$v->v_id}}</td>
                                    <td>{{$v->v_name}}</td>
                                    <td>{{$v->attr_id}}</td>
                                    <td>
                                        <a href="">删除</a>
                                        <a href="">修改</a>
                                    </td>
                                </tr>
                                @endforeach

                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>
        </section><!-- /.content -->
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

</body>
</html>
@endsection