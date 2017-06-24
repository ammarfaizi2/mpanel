<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>elFinder 2.1.x source version with PHP connector</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
	<!-- Require JS (REQUIRED) -->
	<!-- Rename "main.default.js" to "main.js" and edit it if you need configure elFInder options or any things -->
	<script data-main="./main.default.js" src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.3.2/require.min.js"></script>
	<style type="text/css">
		body{
			font-family: Helvetica;
		}
		.menu{
			margin-bottom: 35px;
		}
	</style>
</head>
<body>
	<center>
		<h2>Welcome to IceTea Panel</h2>
		<div class="menu">
			<a href="adminer.php"><button>Adminer</button></a>
		</div>
		<!-- Element where elFinder will be created (REQUIRED) -->
		<div id="elfinder"></div>
	</center>
</body>
</html>