<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>elFinder 2.1.x source version with PHP connector</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
	<!-- Require JS (REQUIRED) -->
	<!-- Rename "main.default.js" to "main.js" and edit it if you need configure elFInder options or any things -->
	<script data-main="./main.default.js" src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.3.2/require.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/myelf.css">
	<style type="text/css">
	</style>
</head>
<body>
	<center>
		<h2>Welcome to IceTea Panel V.0.0.1</h2>
		<div class="menu">
			<a href="adminer.php"><button class="btn">Adminer</button></a>
			<a href="logout.php"><button class="btn">Logout</button></a>
		</div>
		<!-- Element where elFinder will be created (REQUIRED) -->
		<div id="elfinder"></div>
	</center>
</body>
</html>