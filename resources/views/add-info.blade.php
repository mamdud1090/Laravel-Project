<!DOCTYPE html>
<html>
<head>
	<title>ADD Students Info.</title>

	
</head>
<body>

@if(Session::has('info_add'))
	
	<span>{{Session::get('info_add')}}</span>

@endif

	<form method="post" action="{{route('save.info')}}">
		@csrf
		Student Name: <br> <input type="text" name="student_name"> <br>	
		Course Name: <br> <input type="text" name="course_name"> <br>
		Course Fee: <br> <input type="text" name="fee"> <br>
		<input type="submit" value="Submit">
	</form>

</body>
</html>
