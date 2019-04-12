<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ajax练习</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<table class="table">
		<thead>
		<tr>
			<th><input type="checkbox">选择</th>
			<th>ID</th>
			<th>用户名</th>
			<th>班级</th>
			<th>操作</th>
		</tr>
		</thead>
		<tbody>
		@foreach($data as $k=>$v)
		<tr id="{{$v->id}}">
			<td><input type="checkbox" class="checkBoxList" value="{{$v->id}}"></td>
			<td>{{$v->id}}</td>
			<td>{{$v->name}}</td>
			<td>{{$v->class}}</td>
			<td><a>编辑</a></td>
		</tr>
		@endforeach
		</tbody>
	</table>
	<p>
		<input type="hidden" id="page" value="1">
		<input type="button" class="leaf" value="上一页">
		<input type="button" class="leaf" value="下一页">
		<input type="button" id="selectAll" value="全选">
		<input type="button" id="unSelect" value="全不选">
		<input type="button" id="reverseSelect" value="反选">
	</p>
</body>
</html>
<script src="{{URL::asset('js/jquery.js')}}"></script>
<script>
	//全选，反选，全不选
	$(function(){
		$('#selectAll').click(function(){
			$('.checkBoxList:checkbox').prop('checked',true);
		})
		$('#unSelect').click(function(){
			$('.checkBoxList:checkbox').prop('checked',false);
		})
		$('#reverseSelect').click(function(){
			$('.checkBoxList:checkbox').each(function(){
				$(this).prop('checked',!$(this).prop('checked'))
			})
		})
	})
	$('.leaf').click(function(){
		var text = $(this).val();
		var page = $('#page').val();
		if(text=='下一页'){
			page = parseInt(page) + 1;
		}else{
			page = parseInt(page) - 1;
		}
		$.ajax({
			url:'{{url('view/pages')}}',
			type:'get',
			data:{page:page},
			dataType:'json',
			success:function(res){
				if(res.success==1){
               $('tbody').html(' ');
               $('#page').val(page);//
               $(res.data).each(function (key,val) {
                   var tr = "<tr id='"+val.id+"'>";

                   tr+="<td><input type='checkbox' class='checkBoxList' value='"+val.id+"'></td>";
                   tr+="<td>"+val.id+"</td>";
                   tr+="<td>"+val.name+"</td>";
                   tr+="<td>"+val.class+"</td>";
                   tr+="<td><a>编辑</a></td>";
                   tr+="</tr>";
                   $('tbody').append(tr);
               })
				}
			}
		})
	})
</script>
