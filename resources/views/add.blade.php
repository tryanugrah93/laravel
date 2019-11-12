<!DOCTYPE html>
<html>
<head>
	<title>Employee Data</title>
</head>
<body>
 
    <h2>Laravel</h2>
	<h3>Add Employee Data</h3>
 
	<a href="/employee"> Back</a>
	
	<br/>
	<br/>
 
	<form action="/employee/store" method="post">
		{{ csrf_field() }}
		Name <input type="text" name="name" required="required"> <br/>
		Position <input type="text" name="position" required="required"> <br/>
		Age <input type="number" name="age" required="required"> <br/>
		Address <textarea name="address" required="required"></textarea> <br/>
		<input type="submit" value="Submit Data">
	</form>
 
</body>
</html>