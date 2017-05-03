<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<body>
	<form id="form" method="post" action="">
		<input type="text" id="nama" name="todo">
		<input type="button" id="submit" value="Go">
	</form>
	@if(count($data))
	<ul id="list">
		@foreach($data as $data)
			<li id="todo{{$data->id}}">{{ $data->nama }} <input type="button" class="delete" id="{{$data->id}}" value="delete"></li>
		@endforeach
	</ul>
	@endif
</body>


<script>
$(document).ready(function(){
	$('#form').on('click','#submit',function(){
		$.ajax({
			url		: 'todo',
			method 	: 'post',
			data	: {'nama':$('#nama').val(),'type':'INSERT'},
			success : function(data) {
            	alert("Input Sukses !");
        	}
		});
	})

	$('.delete').click(function(){
		var id = $(this).attr('id');
		$.ajax({
			url		: 'todo',
			method	: 'post',
			data	: {'id':id,'type':'DELETE'},
			success	: function(response){
				alert("Delete Sukses !");
				$("#todo"+id).remove();
			}
		})
	})
})
</script>
</html>