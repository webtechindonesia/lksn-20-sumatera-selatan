<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="POST" action="../aksilog">
		@csrf
		<input type="username" name="name">
		<input type="password" name="pass">

		<input type="submit" name="login">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
	</form>
</body>
</html>