<?php
require __DIR__."/login.php";
$l = new Login();
if ($l->session()) {
	$l->destroy();
	header("location:index.php?ref=logout&clear=true");
} else {
	header("location:index.php?ref=logout");
}
die;