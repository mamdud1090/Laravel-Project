<!DOCTYPE html>
<html>
<head>
	<title>Student's Information LIst</title>
	<style type="text/css">
		table{
			border-collapse: collapse 1px solid;

		}
		td,th{
			padding: 5px;
			border: 2px solid;
		}
	</style>
</head>
<body>

@if(Session::has('info_delete'))
	
	<span>{{Session::get('info_delete')}}</span>

@endif

<a style="float: right;" href="{{route('add.info')}}">Add Information</a>

	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Course Name</th>
			<th>Course Fee</th>
			<th>Action</th>
		</tr>
		@foreach($students as $student)

			<tr>
				<td>{{$student->id}}</td>
				<td>{{$student->student_name}}</td>
				<td>{{$student->course_name}}</td>
				<td>{{$student->fee}}</td>
				<td><a href="/edit-info/{{$student->id}}">Edit</a></td>
				<td><a href="/delete-info/{{$student->id}}">Delete</a></td>
			</tr>

		@endforeach
	</table>

</body>
</html>