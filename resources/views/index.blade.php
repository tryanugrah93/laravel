<!DOCTYPE html>
<html>
<head>
	<title>Employee Data</title>
</head>
<body>
 
	<h2>Laravel</h2>
	<h3>Employee Data</h3>
 
	<a href="/employee/add"> + Add New Employee</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Name</th>
			<th>Position</th>
			<th>Age</th>
			<th>Address</th>
			<th>Option</th>
		</tr>
		@foreach($employee as $emp)
		<tr>
			<td>{{ $emp->employee_name }}</td>
			<td>{{ $emp->employee_position }}</td>
			<td>{{ $emp->employee_age }}</td>
			<td>{{ $emp->employee_address }}</td>
			<td>
				<a href="/employee/edit/{{ $emp->employee_id }}">Edit</a>
				|
				<a href="/employee/delete/{{ $emp->employee_id }}">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>