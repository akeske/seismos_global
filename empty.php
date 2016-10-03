<?php
$time_start = microtime(true);
	$sqlDb = "DELETE FROM seismos";
	if ( mysqli_query($con, $sqlDb) ) {
	}else{
		echo "Error creating database: " . mysql_error()."</br>";
	}
	$query5 = "UPDATE users SET installcan=0 WHERE id=".$_SESSION['id'];
	mysqli_query($con, $query5)or print("A MySQL error has occurred.<br />Your Query: " . $your_query . "<br /> Error: (" . mysql_errno() . ") " . mysql_error())."\n";

echo "Διαγραφτηκε η βάση δεδομένων<br>";
$time_end = microtime(true);
$time = $time_end - $time_start;
echo "<br> Χρόνος για την εισαγωγή των δεδομένων: ".$time." δευτερόλεπτα<br>";
?>
