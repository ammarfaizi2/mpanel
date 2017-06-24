<?php 
$scanbg = scandir(__DIR__."/img/login_bg");
unset($scanbg[0], $scanbg[1]);
$bg = $scanbg[rand(2, 2+count($scanbg)-1)];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2"/>
	<link rel="stylesheet" type="text/css" href="css/login.css?t=<?php print time(); ?>">
	<style type="text/css">
		body{
			background-image: url(img/login_bg/<?php print $bg; ?>);
			font-family: Helvetica;
		}
	</style>
</head>
<body>
<center>
	<div class="login_cage">
		<h2>Login</h2>
		<form method="post" action="">
			<label>Username : </label><br>
			<input type="text" name="username"><br><br>
			<label>Password : </label><br>
			<input type="password" name="password"><br><br>
			<input type="submit" name="login" value="Login" class="login_btn">
		</form>
	</div>
</center>
</body>
</html>