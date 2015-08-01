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

//header("Content-type: text/xml; charset=iso-8859-7");

$size=$_SESSION['diastaseis']*$_SESSION['diastaseis'];
// Start XML file, echo parent node
echo '<markers>';

echo '<size size="' . $_SESSION['diastaseis'] . '" />';

for($i=0; $i<$_SESSION['diastaseis']; $i++) {
	echo '<lat lat="' . $_SESSION['flatxml'.$i] . '" />';
}
$x=$i-1;
echo '<lat lat="' . $_SESSION['tlatxml'.$x] . '" />';



for($i=0; $i<$_SESSION['diastaseis']; $i++) {
	echo '<lng lng="' . $_SESSION['flngxml'.$i] . '" />';
}
$x=$i-1;
echo '<lng lng="' . $_SESSION['tlngxml'.$x] . '" />';


for($i=0; $i<$size; $i++) {
	$query = $_SESSION['sqlD3'.$i];
	$result = mysql_query($query);
	// Iterate through the rows, printing XML nodes for each
	while ( $row = mysql_fetch_array($result) ) {
		// ADD TO XML DOCUMENT NODE
		echo '<marker' . $i . ' ';
	//	echo 'name="' . parseToXML($row['name']) . '" ';
	//	echo 'info="' . parseToXML($row['info']) . '" ';
		echo 'lat="' . $row['lat'] . '" ';
		echo 'lng="' . $row['lng'] . '" ';
		echo 'megethos="' . $row['megethos'] . '" ';
		echo 'vathos="' . $row['vathos'] . '" ';
		echo 'type="' . $row['type'] . '" ';
		echo 'date="' . $row['date'] . '" ';
		echo '/>';
	}
}
// End XML file
echo '</markers>';
?>
