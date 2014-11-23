
<?php
include("inc/database.php");

$memory = $_GET['memory'];
$lat1 = $_GET['lat1'];
$lng1 = $_GET['lng1'];
$lat2 = $_GET['lat2'];
$lng2 = $_GET['lng2'];
$type = $_GET['type'];

$query = mysql_query("INSERT INTO `memory` (id, memory, lat1, lng1, lat2, lng2, type) VALUES ('', '$memory', '$lat1', '$lng1', '$lat2', '$lng2', '$type')");
 

?>