<?php
if (isset($_POST['login'])) {
	if (!file_exists(__DIR__."/account/".strtolower($_POST['username']).".txt")) {
		$login = false;
	} elseif (file_get_contents(__DIR__."/account/".strtolower($_POST['username']).".txt") === $_POST['password']) {
		$login = true;
	} else {
		$login = false;
	}
}
if ($login) {
	setcookie("login", base64_encode(Teacrypt::encrypt($_POST['username'], "crayner")), );
}