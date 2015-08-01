<?php
session_start();
include("inc/database.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Log out user</title>
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

	<table class="bg" align="center">
	<tr valign="top">
		<td>	<br>
			<table width="550" align="center" border="0" cellpadding="10">
			<tr>
				<td align="center" width="250">
				<?php
					if(!$logged_in){
						echo "<h2>Error!</h2>\n";
						echo "Έχετε ήδη αποσυνδεθεί!!!";
						echo "<br><br>";
						echo "Παρακαλώ περιμένετε...";
						echo "<meta http-equiv=\"Refresh\" content=\"2;url=index.php\">";
					}else{
						unset($_SESSION['username']);
						unset($_SESSION['password']);
						unset($_SESSION['id']);
						unset($_SESSION['installcan']);
						$_SESSION = array(); 
						session_destroy();

						echo "<h2>Logged Out</h2>\n";
						echo "Έχετε αποσυνδεθεί επιτυχώς.";
						echo "<br><br>";
						echo "Παρακαλώ περιμένετε...";
						echo "<meta http-equiv=\"Refresh\" content=\"2;url=index.php\">";
					}
				?>
				</td>
			</tr>
			</table>
		</td>
	</tr>
	</table>
</div>
	<div id="foot">
	Copyright &copy; 2013 - Thanos Keskempes
	</div>
</body>
</html>