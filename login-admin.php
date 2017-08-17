<?php include('server-admin.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body style="background-image:url(images/pattern.jpg)">


	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login-admin.php">

		<?php include('errors-admin.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		
	</form>


</body>
<?php include_once("footer.php"); ?>

</html>