<!DOCTYPE html>
<html>
<head>
  <title>laravel轮播图</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="{{URL::asset('js/app.js') }}"></script>
  <script type="text/javascript" src="{{URL::asset('css/app.css') }}"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  .carousel-indicators li{
		position:relative;
		-ms-flex:0 1 auto;
		flex:0 1 auto;
		width:30px;
		height:30px;
		border-radius:100%;
		margin-right:3px;
		margin-left:3px;
		text-indent:-999px;
		background-color:rgba(255,0,255,.9)
  }
  </style>
</head>
<body>

<div id="demo" class="carousel slide" data-ride="carousel">
 
  <!-- 指示符 -->
  <ul class="carousel-indicators">
  	@foreach($list as $k=>$v)
  	@if($k==0)
	<li data-target="#demo" data-slide-to="0" class="active"></li>
    @endif
  	@endforeach
    
    @foreach($list as $k=>$v)
    @if($k!=0)
    <li data-target="#demo" data-slide-to="{{$k}}"></li>
    @endif
    @endforeach
  </ul>
 
  <!-- 轮播图片 -->
  <div class="carousel-inner">
  	@foreach($list as $k=>$v)
    @if($k==0)
	<div class="carousel-item active">
      <img src="/storage/{{$v->image}}">
    </div>
    @endif
    @endforeach
    
    @foreach($list as $k=>$v)
    @if($k!=0)
    <div class="carousel-item">
		<img src="/storage/{{$v->image}}">
    </div>
    @endif
    @endforeach
  </div>
 
  <!-- 左右切换按钮 -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
 
</div>
<form action="{{url('photo/create')}}" method="post" enctype="multipart/form-data">
	<table>
		<input type="file" name="image">
		<input type="submit">
	</table>
</form>
<table border="1">
	<tr>
		<th>ID</th>
		<th>图片</th>
		<th>操作</th>
	</tr>
	@foreach($data as $k=>$v)
	<tr>
		<td>{{$v->id}}</td>
		<td>
			<img src="/storage/{{$v->image}}" alt="错误" height="50px" width="50px">
		</td>
		<td>{{$v->id}}</td>
	</tr>
	@endforeach
</table>
{{$data->links()}}
</body>
</html>