<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
</head>

<body>
	<div style="text-align: center;">
		<br/><br/>
		<p>Please log in:</p>

		<form action="authenticate.php" method="post">
			<input type="text" name="username" placeholder="username"><br/><br/>
      <input type="text" name="password" placeholder="password"><br/><br/>
			<input type="submit" value="Login">
		</form>

		<br/><br/>

		<p>Or create an account</p> <br/>
		<form action="createUser.php" method="post">
			<input type="text" name="usernameC" placeholder="username"><br/><br/>
      <input type="text" name="passwordC" placeholder="password"><br/><br/>
			<input type="submit" value="Create User">
		</form>

	</div>
</body>

</html>