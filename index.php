<?php
require __DIR__."/login.php";
$l = new Login();
if (isset($_COOKIE['login']) and $l->session()) {
	$l->elfinder();
} else {
	if ($l->login_action()) {
		header("location:?ref=lg");
	} else {
		$l->view();
	}
} 
?>