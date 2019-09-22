<?php

/**
 * Connect to the mysql database.
*/
if (!isset($_CONFIG))
    require 'config.php';

$con=mysqli_connect ($CFG_SERVER, $CFG_USER, $CFG_PASSWORD, null, $CFG_PORT)
or die ('Συγγνώμη αλλά δεν μπορούμε να συνδεθούμε στην βάση δεδομένων. Παρακαλώ ελένξτε το αρχειο CONFIG.PHP!!!');
global $con;
/* connect to database */
mysqli_select_db ($con, $CFG_DATABASE);

//ToDo: The connection should be change to this someday
//$dns = "mysql:host=" .$CFG_SERVER. ";port=" . $CFG_PORT . ";dbname=" . $CFG_DATABASE;
//$pdo = new PDO($dns, $CFG_USER, $CFG_PASSWORD);
//global $pdo;

?>
