<?php
require __DIR__."/login.php";
$l = new Login();
if (isset($_COOKIE['login']) and $l->session()) {
	$l->elfinder();
	die;
} else {
	if (isset($_POST['login'])) {
		if ($l->login_action()) {
			header("location:?ref=lg");
		} else {
			header("location:?ref=wrong_pw");
		}
		die;
	}
}
$l->view();
die;
?>