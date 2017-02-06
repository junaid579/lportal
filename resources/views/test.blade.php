<!DOCTYPE html>
<html>
<head>
	<title>Test login</title>
</head>
<body>
<form action="test" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token()}}">

	<input type="text" name="emp_id" placeholder="Enter Employee Id">
		<br>

	<input type="text" name="employee" placeholder="Enter Employee name">
		<br>

	<input type="text" name="salary" placeholder="Salary" >Expected CTC
		<br>

	<input type="submit" name="register" value="Register">
		<br>

	<input type="submit" name="get_salary" value="Get Salary">

	<input type="submit" name="get_details" value="Get Details">
		<br>

</form>

</body>
</html>