<?php

/**
 * Connect to the mysql database.
 */
if (!isset($_CONFIG))
    require 'config.php';

$con=mysqli_connect ($CFG_SERVER, $CFG_USER, $CFG_PASSWORD)
or die ('Συγγνώμη αλλά δεν μπορούμε να συνδεθούμε στην βάση δεδομένων. Παρακαλώ ελένξτε το αρχειο CONFIG.PHP!!!');
global $con;
/* connect to database */
mysqli_select_db ($con, $CFG_DATABASE);
?>
