<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="frm" >
		<form action ="user.php" method="POST">
			<p>
				<LABEL>Username :</LABEL>
				<input type="text" id="user" name="username">
			</p>
			<!-- <p>
				<LABEL>E-mail :</LABEL>
				<input type="text" id="email" name="email">
			</p> -->
			<p>
				<LABEL>Password :</LABEL>
				<input type="password" id="password" name="password">
			</p>
			 <p>
				<input type="submit" id="btn" value="Login" name="submit">
			</p>			
		</form>	
	</div>

</body>
</html>