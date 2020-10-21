<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form>
		@csrf
		<input type="hidden" name="_token" value="{{csrf()}}">
	</form>
</body>
</html>