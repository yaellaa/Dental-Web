<html>
	<head>	
		<title>Login (Dental)</title>
	</head>
<body>
		<link href="styles/Login.css" type="text/css" rel="stylesheet"/>
<center>
	<img src ="public/uploads/banner.png"/>
	<br></br>
	<div class ="login">
		<form action="app/auth/loginpro.php" method="POST">
			<p>ID Number: &nbsp
				<input type="text" id="u" name="u" placeholder="Enter ID Number"></p>
			<p>Password: &nbsp&nbsp&nbsp
				<input type="password" id="p" name="p" placeholder="Enter Password"></p>

				<input type="submit" name="login" value="Login">
				<input type="submit" name="addu" value="Add User">
		</form>
	</div>
	</center>
</body>
</html>