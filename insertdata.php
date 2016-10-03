<?php
session_start();
include("inc/database.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Insert data to database</title>
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
			if($logged_in){
				echo "Δεν είστε συνδεδεμένος";
			}else{
			//	if($_SESSION['installcan'] ==0){ ?>		
				<table align="center" border="0" width="900">
				<tr>
					<td align="center">
						<?php
						if (!$con) {
							die('Could not connect: ' . mysqli_error($con))."\n";
						}
						echo "<br>";
						echo "Please wait....<br>";
						include("funcs.php");
						?>
					</td>
				</tr>
				</table>
	<?php	//	$query5 = "UPDATE users SET installcan=1 WHERE id=".$_SESSION['id'];
			//		mysqli_query($con, $query5)or print("A MySQL error has occurred.<br />Your Query: " . $your_query . "<br /> Error: (" . mysqli_errno($con) . ") " . mysqli_error($con))."\n";
			//	}else{
			//		echo "</br>";
			//		echo "Έχετε κάνει εγκατάσταη τη βάση δεδομένων, οπότε δεν μπορείτε να την επαναγκαταστήσετε";
		//	}
			?>
<?php  } ?>
	</div>
	<div id="foot">
	Copyright &copy; 2013 - Thanos Keskempes
	</div>
</body>
</html>