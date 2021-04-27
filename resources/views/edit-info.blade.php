<!DOCTYPE html>
<html>
<head>
	<title>Update Students Info.</title>

	
</head>
<body>

@if(Session::has('info_update'))
	
	<span>{{Session::get('info_update')}}</span>

@endif

	<form method="post" action="{{route('update.info')}}">
		@csrf

		<input type="hidden" name="id" value="{{$students->id}}">
		Student Name: <br> <input type="text" name="student_name" value="{{$students->student_name}}"> <br>	
		Course Name: <br> <input type="text" name="course_name" value="{{$students->course_name}}"> <br>
		Course Fee: <br> <input type="text" name="fee" value="{{$students->fee}}"> <br>
		<input type="submit" value="Submit">
	</form>

</body>
</html>
