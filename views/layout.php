<!DOCTYPE HTML>
<html>
	<head>
		<title>PHP MVC</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<link href="styles/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="styles/style.css" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
	</head>

	<body>
	
		<!-- Header -->
		<div class="header">
			<div class="clearfix"></div>
		</div>

		<!-- Content -->
		<?php require_once 'routes.php'; ?>
		
		<!-- Footer -->
		<div class="footer">
			<div class="clearfix"></div>
		</div>
		
		<!-- Copyright -->
		<div class="copy">
			<p>&copy; 2016 - <a href="http://nguyenismail.com" target="_blank">Isma&iuml;l</a></p>
		</div>
		
		<script src="scripts/jquery-1.11.1.min.js"></script>
		<script src="scripts/bootstrap.min.js"></script>
		
	</body>
</html>