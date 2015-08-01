<?php
include("inc/database.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Register user</title>
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
	<table class="bg" align="center" border="0">
	<tr valign="top">
		<td>	<br>
			<table width="550" align="center" border="0" cellpadding="10">
			<?php if(!$_SESSION['regresult']){ ?>
			<tr>
				<td>
					<form action="<?php echo $HTTP_SERVER_VARS['PHP_SELF']; ?>" method="post">
						<table width="550" align="center" border="0" cellpadding="10">
							<tr>
								<td width="250"> (*) Όνομα </td>
								<td>
									<input type="text" name="usernameREG" id="usernameREG" maxlength="20" size="20"/>
								</td>
							</tr>
							<tr>
								<td> (*) e-mail </td>
								<td>
									<input type="text" name="emailREG" id="emailREG" maxlength="20" size="20"/>
								</td>
							</tr>
							<tr>
								<td> (*) Κωδικός </td>
								<td>
									<input type="password" name="codeREG" id="codeREG" maxlength="20" size="20"/>
								</td>
							</tr>
							<tr>
								<td> (*) Επιβεβαίωση Κωδικού </td>
								<td>
									<input type="password" name="recodeREG" id="recodeREG" maxlength="20" size="20"/>
								</td>
							</tr>
							<tr>
								<td colspan="20" align="right">
									<input type="submit" name="subjoin" value="Εγγραφή!">
								</td>
							</tr>
						</table>
					</form>
				</td>
			</tr>
			<?php } ?>
			<tr>
				<td class="erroemsg">
					<?php
						/**
						* εμφανιζει το καταλληλο μηνυμα στον χρηστη
						* μετα την εγγραφη. θετει και τις μεταβλητεσ Session.
						*/
						function displayStatus(){
							$uname = $_SESSION['reguname'];
							if($_SESSION['regresult']){ 	?>
								<table width="550" align="center" border="0">
								<tr>
									<td>
									<h2>Registered!</h2>
										<p class="messageregister">Σας ευχαριστούμε, <b><?php echo $uname; ?></b>, τώρα μπορείτε να έχετε πρόσβαση στις επιπλέον δυνατότητες της ιστοσελίδας μας.
										<br><br>Παρακαλώ περιμένετε...</p>
										<?php echo "<meta http-equiv=\"Refresh\" content=\"4;url=login-form.php\">"; ?>
									</td>
								</tr>
								</table>
							<?php }else{ ?>
								<table width="550" align="center" border="0">
								<tr>
									<td align="center">
										<h2>Η εγγραφή σας απέτυχε!!!</h2>
										<p class="messageregister">Η εγγραφή με όνομα <b><?php echo $uname; ?></b>, δεν μπορεί να ολοκληρωθεί.<br>Παρακαλώ δοκιμάστε αργότερα.
										<br><br>Παρακαλώ περιμένετε...</p>
										<?php echo "<meta http-equiv=\"Refresh\" content=\"4;url=register-form.php\">"; ?>
									</td>
								</tr>
								</table>
						<?php }
							unset($_SESSION['registered']);
							unset($_SESSION['reguname']);
							unset($_SESSION['regresult']);
							$_SESSION = array();
						}
					if($_SESSION['regresult']){
						displayStatus();
						return;
					}
		
						/**
						* επιστρεφει true αν το ονομα ειναι
						* παρμενο απο αλλον χρηστη, false αν οχι.
						*/
						function usernameTaken($username){
							global $con;
							if(!get_magic_quotes_gpc()){
								$username = addslashes($username);
							}
							$q = "select username from users where username = '$username'";
							$result = mysql_query($q,$con);
							return (mysql_numrows($result) > 0);
						}
						
						/**
						* επιστρεφει true αν το email ειναι
						* παρμενο απο αλλον χρηστη, false αν οχι.
						*/
						function email($email){
							global $con;
							if(!get_magic_quotes_gpc()){
								$email = addslashes($email);
							}
							$q = "select email from users where email = '$email'";
							$result = mysql_query($q,$con);
							return (mysql_numrows($result) > 0);
						}
						
						/**
						* ελέγχει αν οι δυο κωδικοί είναι ίδιοι
						*/
						function checkpass($pass1,$pass2){
							$pass1 = addslashes($pass1);
							$pass2 = addslashes($pass2);
							if($pass1==$pass2){
								return true;
							}else{
								return false;
							}
						}

						/**
						* εισαγει το username και τον password
						* στην βαση δεδομενων, επιστρφει true αν επιτυχη
						* false αν οχι.
						*/
						function addNewUser($username, $password, $email){
							global $con;
							$q = "INSERT INTO users VALUES ('', '$username', '$password', '$email', '')";
							return mysql_query($q,$con);
						}
						
						/**
						* εκτελειτε το κουμπι "εγγραφη"
						*/
						if(isset($_POST['subjoin'])){
							/* σιγοθρευει αν τα πεδια ειναι γεματα */
							if(!$_POST['usernameREG'] || !$_POST['codeREG'] || !$_POST['recodeREG'] || !$_POST['emailREG']){
								die('Παρακαλώ συμπληρώστε όλα τα πεδία με τον αστερίσκο στα αριστερά τους.');
							}

							/* ελεγχει αν το ονομα χρησιμοποιειται */
							if(usernameTaken($_POST['usernameREG'])){
								$user=$_POST['usernameREG'];
								die("Το όνομα, <strong>$user</strong>, χρησιμοποιείται, παρακαλώ εισάγετε άλλο όνομα!");
							}
				
							/* ελεγχει αν το email χρησιμοποιειται */
							if(email($_POST['emailREG'])){
								$email=$_POST['emailREG'];
								die("Το email, <strong>$email</strong>, χρησιμοποιείται, παρακαλώ δόστε άλλο όνομα!");
							}
							
							/* ελεγχει αν οι δυο κωδικοι ταιριαζουν */
							if(!checkpass($_POST['codeREG'], $_POST['recodeREG'])){
								die("Οι δυο κωδικοί δεν ταιριάζουν!");
							}

							/* προσθετει το λογαριασμο στην βαση δεδομενων */
							$md5pass = md5($_POST['codeREG']);
							$_SESSION['reguname'] = $_POST['usernameREG'];
							$_SESSION['regresult'] = addNewUser($_POST['usernameREG'],
														$md5pass, $_POST['emailREG']);
							$_SESSION['registered'] = true;
							echo "<meta http-equiv=\"Refresh\" content=\"0;url=$HTTP_SERVER_VARS[PHP_SELF]\">";
							return;
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
	Copyright &copy; 2011 - Thanos Keskempes
</div>
</body>
</html>