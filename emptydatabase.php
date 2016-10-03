<?php
session_start();
include("inc/database.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Empty data to database</title>
	<link rel="SHORTCUT ICON" href="favicon.ico">
	<meta http-equiv="content-language" content="gr">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="geo.region" content="en-US,GR">
	<meta name="Description" content="">
	<meta name="Keywords" content="">
	<meta name="robots" content="index,follow">
	<link href="css/mycss.css" rel="stylesheet" type="text/css">
	<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="header">
	<h3>Earthquake Prediction - Global</h3>
	</div>
	<div id="container">
	<?php include("menu.php"); ?>
		<?php
			if(!$logged_in){
				echo "Δεν είστε συνδεδεμένος";
			}else{ ?>
		<table align="center" border="0" width="900">
		<tr>
			<td align="center">
				<div align="center">
					<?php
					echo "<br>";
					include("empty.php");
					?>
				</div>
			</td>
		</tr>
		</table>
		<?php } ?>
	</div>
	<div id="foot">
	Copyright &copy; 2013 - Thanos Keskempes
	<!-- <br>
	<a href="epikoinwnia.php">Σύνδεση διαχειριστή</a> -->
	</div>
</body>
</html>