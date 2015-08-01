<?php
session_start();
include("inc/database.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Login user</title>
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
					<?php $logged_in = checkLogin();
							if(!$logged_in){ ?>
					<tr>
						<td>
							<form action="<?php echo $HTTP_SERVER_VARS['PHP_SELF']; ?>" method="post">
								<table width="550" align="center" border="0" cellpadding="10">
									<tr align="center">
										<td width="250"> Όνομα: </td>
										<td>
											<input type="text" name="username" id="username" maxlength="20" size="20"/>
										</td>
									</tr>
									<tr align="center">
										<td> Κωδικός: </td>
										<td>
											<input type="password" name="password" id="password" maxlength="20" size="20"/>
										</td>
									</tr>
									<tr>
										<td colspan="2" align="right">
											<input type="submit" name="sublogin" value="Είσοδος">
										</td>
									</tr>
								</table>
							</form>
						</td>
					</tr>
					<?php } if($logged_in) { ?>
					<tr>
						<td class="erroemsg">
							<?php
							echo "<h2>Logged In!</h2>";
							echo "Καλώς ήλθατε <b>$_SESSION[username]</b>.";
							echo "<br><br>Παρακαλώ περιμένετε...";
							echo "<meta http-equiv=\"Refresh\" content=\"2;url=index.php\">";
							} ?>
						</td>
					</tr>
					<tr>
						<td>
							<?php
							if(isset($_POST['sublogin'])){
								/* ελεγχει αν ολα τα πεδια ειναι γεματα */
								if(!$_POST['username'] || !$_POST['password']){
									die('Δεν συμπλρώσατε τα απαραίτητα πεδία.');
								}
								/* ελεγχει το μηκος του ονοματος */
								$_POST['username'] = trim($_POST['username']);
								if(strlen($_POST['username']) > 30){
									die("Το όνομα που εισάγατε είναι μεγαλύτερο από 30 χαρακτήρες.");
								}
								/* ελεγχει αν το ονομα ειναι στην βαση και αν ο κωδικος ειναι σωστος */
								$md5pass = md5($_POST['password']);
								$result = confirmUser($_POST['username'], $md5pass);

								/* ελεγχος σφαλματων */
								if($result == 1){
									die('Αυτό το όνομα δεν υπάρχει στην βάση μας.');
								}else if($result == 2){
									die('Λάθος κωδικός, παρακαλώ ξαναπροσπαθήστε.');
								}

								/* το ονομα και ο κωδικος ειναι σωστα, αρχειοθετηση των μεταβλητων session */
								$_POST['username'] = stripslashes($_POST['username']);
								$_SESSION['username'] = $_POST['username'];
								$_SESSION['password'] = $md5pass;

								echo "<meta http-equiv=\"Refresh\" content=\"0;url=$HTTP_SERVER_VARS[PHP_SELF]\">";
								return;
							} ?>
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