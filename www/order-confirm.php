<!DOCTYPE html>
<html>
	<head>
		<title>Tark Pub - BarConnect</title>
		
		<link href="css/barconnect.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="container">
			<div class="header-wrapper">
				<div class="header">
				<h1>Order a <?= $_GET['order'] ?>?</h1>
				</div>
			</div>
			<div class="menu-wrapper">
				<ul class="menu">
					<li><a href="/order-thanks.php">Confirm Order</a></li>
					<li><a href="/drinks-draught.php">Cancel</a></li>
				</ul>
			</div>
			<div class="footer-wrapper">
				<div class="footer">&copy; Copyright 2013 Tark Engineering</div>
			</div>
		</div>
	</body>
</html>