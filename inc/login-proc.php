<?php

function confirmUser($username, $password){
   global $con;
   if(!get_magic_quotes_gpc()) {
	$username = addslashes($username);
   }

   $q = "select password from users where username = '$username'";
   $result = mysql_query($q,$con);
   if(!$result || (mysql_numrows($result) < 1)){
      return 1;
   }

   $dbarray = mysql_fetch_array($result);
   $dbarray['password']  = stripslashes($dbarray['password']);
   $password = stripslashes($password);

   if($password == $dbarray['password']){
		$q = "select * from users where username = '$username'";
		$result = mysql_query($q,$con);
		$dbarray = mysql_fetch_array($result);
		$_SESSION['id'] =  $dbarray['id'];
		$_SESSION['installcan'] =  $dbarray['installcan'];
		$_SESSION['password'] = $dbarray['password'];
		return 0;
	} else {
		return 2;
	}
}

function checkLogin(){

   if(isset($_SESSION['username']) && isset($_SESSION['password'])){
      if(confirmUser($_SESSION['username'], $_SESSION['password']) != 0){
         unset($_SESSION['username']);
         unset($_SESSION['password']);
         unset($_SESSION['id']);
		 unset($_SESSION['installcan']);
         return false;
      }
      return true;
   }
   else{
      return false;
   }
}
$logged_in = checkLogin();

?>
