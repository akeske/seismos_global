<?php
session_start();
include("inc/database.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Insert database</title>
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

		<table align="center" border="0" width="900">
		<tr>
			<td align="center">
				<div align="center">
				<br>
					<?php
						if (!$con) {
							die('Could not connect: ' . mysql_error())."\n";
						}
						// Create database
						$query1="CREATE DATABASE IF NOT EXISTS globaldb";
						if (mysqli_query($con, $query1)) {
							print ("Database created successfully <br>");
						} else {
							print ("Error in creating database: <br><br>". mysqli_error ());
						}
						mysqli_select_db($con, "globaldb")or die("A MySQL error has occurred.<br />Your Query: " . $your_query . "<br /> Error: (" . mysqli_connect_error() . ") " . mysqli_connect_error())."\n";
						// Create table
						mysqli_set_charset($con, "utf8_general_ci");
						$query2 = "CREATE TABLE IF NOT EXISTS `seismos` (
						  `id` MEDIUMINT(6) NOT NULL AUTO_INCREMENT ,
						  `idyear` MEDIUMINT(6) NULL ,
						  `year` SMALLINT(4) NULL ,
						  `month` SMALLINT(4) NULL ,
						  `name` CHAR( 20 )  NULL ,
						  `info` CHAR( 30 ) NULL ,
						  `lat` FLOAT( 7, 4 ) NULL ,
						  `lng` FLOAT( 7, 4 ) NULL ,
						  `megethos` FLOAT( 3, 1 ) NULL ,
						  `vathos` TINYINT(3) UNSIGNED NULL ,
						  `type` TINYINT(3) UNSIGNED NULL ,
						  `typeSize` TINYINT(3) UNSIGNED NULL ,
						  `date` datetime NULL ,
						  PRIMARY KEY (`id`))";
						// Execute query
						if (mysqli_query($con,$query2)) {
							echo "Table seismos created!";
							echo "<br>";
						}else{
							echo "Error creating table map: " . mysqli_connect_error();
							echo "<br>";
						}
						// Create table
						mysqli_set_charset($con,"utf8_general_ci");
						$query3 = "CREATE TABLE IF NOT EXISTS `users` (
						`id` int(6) NOT NULL AUTO_INCREMENT,
						`username` CHAR(15) NULL,
						`password` CHAR(32) NULL,
						`email` CHAR(32) NULL,
						`installcan` TINYINT(3) NOT NULL default '0', 
						PRIMARY KEY (`id`))";
						// Execute query
						if (mysqli_query($con,$query3)) {
							echo "Table users created!";
							echo "<br>";
						}else{
							echo "Error creating table users: " . mysqli_connect_error();
							echo "<br>";
						}
						// Create table
						mysqli_set_charset($con,"utf8_general_ci");
						$query3 = "CREATE TABLE IF NOT EXISTS `memory` (
						`id` int(6) NOT NULL AUTO_INCREMENT,
						  `memory` int(2) NOT NULL,
						  `lat1` double(10,7) NOT NULL,
						  `lng1` double(10,7) NOT NULL,
						  `lat2` double(10,7) NOT NULL,
						  `lng2` double(10,7) NOT NULL,
						  `type` int(6) NOT NULL,
						  PRIMARY KEY (`id`))";
						// Execute query
						if (mysqli_query($con,$query3)) {
							echo "Table memory created!";
							echo "<br>";
						}else{
							echo "Error creating table memory: " . mysqli_connect_error();
							echo "<br>";
						}
						echo "<br>";
						echo "<br>";
						echo "Παρακαλώ <b>κατεβάστε</b> το αρχειο <b><a href='download.php?download_file=php.ini'>php.ini</a></b>";
						echo "<br>";
						echo "Και <b>αντικαταστήστε</b> το με το αρχείο που βρίσκεται στον φάκελο <b>C:\\xampp\php</b>, όπου C:\\ ο σκληρός που έχετε εγκαταστήσει το xampp";
					?>
				</div>
			</td>
		</tr>
		</table>
	</div>
	<div id="foot">
	Copyright &copy; 2013 - Thanos Keskempes
	</div>
</body>
</html>