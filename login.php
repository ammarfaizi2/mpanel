<?php
if (isset($_POST['login'])) {
	if (!file_exists(__DIR__."/account/".strtolower($_POST['username']).".txt")) {
		$login = false;
	} elseif (file_get_contents(__DIR__."/account/".strtolower($_POST['username']).".txt") === $_POST['password']) {
		$login = true;
	} else {
		$login = false;
	}
} else {
	$login = false;
}
if ($login) {
	setcookie("login", base64_encode(Teacrypt::encrypt($_POST['username'], "crayner")), time()+7200);
	header("location:?ref=login");
	die;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<center>
	<form method="post" action="">
		<label>Username : </label><br>
		<input type="text" name="username"><br><br>
		<label>Password : </label><br>
		<input type="password" name="password"><br><br>
		<input type="submit" name="login" value="login">
	</form>
</center>
</body>
</html>