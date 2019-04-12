@extends('admin_template')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>公寓列表</title>
</head>
<body>
<div>
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">

        <!-- Main content -->
        <section class="content">
            <a href="{{url('apartment/add')}}"><button type="button" class="btn btn-success">Create Apartment</button></a>
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
                                    <th>Apartment Name</th>
                                    <th>Type</th>
                                    <th>Is Open</th>
                                    <th>exit</th>
                                </tr>
                                @foreach($data as $k=>$v)
                                <tr>
                                    <td>{{$v->id}}</td>
                                    <td>{{$v->apartment_name}}</td>
                                    <td>
                                        @if($v->type==1)
                                            <span class="label label-success">集中式</span></td>
                                        @else
                                        <span class="label label-success">分布式</span></td>
                                        @endif</td>
                                    <td>
                                        @if($v->is_open==1)
                                            <span class="label label-success">开放</span></td>
                                    @else
                                        <span class="label label-danger">未开放</span></td>
                                    @endif</td>
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