<?php
session_start();
include("inc/database.php");

function parseToXML($htmlStr) 
{
$xmlStr=str_replace('<','&lt;',$htmlStr); 
$xmlStr=str_replace('>','&gt;',$xmlStr); 
$xmlStr=str_replace('"','&quot;',$xmlStr); 
$xmlStr=str_replace("'",'&#39;',$xmlStr); 
$xmlStr=str_replace("&",'&amp;',$xmlStr); 
return $xmlStr; 
}

header("Content-type: text/xml; charset=iso-8859-7");

// Start XML file, echo parent node
echo '<tools>';
	$query = "Select * from memory where memory=3";
	$result = mysql_query($query);
	// Iterate through the rows, printing XML nodes for each
	while ( $row = mysql_fetch_array($result) ) {
		// ADD TO XML DOCUMENT NODE
		echo '<tool ';
	//	echo 'name="' . parseToXML($row['name']) . '" ';
	//	echo 'info="' . parseToXML($row['info']) . '" ';
		echo 'lat1="' . $row['lat1'] . '" ';
		echo 'lng1="' . $row['lng1'] . '" ';
		echo 'lat2="' . $row['lat2'] . '" ';
		echo 'lng2="' . $row['lng2'] . '" ';
		echo 'type="' . $row['type'] . '" ';
		echo '/>';
	}
// End XML file
echo '</tools>';
?>
