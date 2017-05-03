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
	<ul>
		@foreach($data as $data)
			<li>{{ $data->nama }}</li>
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
			data	: {'nama':$('#nama').val()},
			success : function(response) {
            	alert("Input Sukses !");
        	}
		});
	})
})
</script>
</html>