
<?php
include("inc/database.php");

$memory = $_GET['memory'];

$query = mysql_query(" DELETE FROM memory WHERE memory='$memory'");


?>