<?php
	function parseToXML($htmlStr) {
		$xmlStr=str_replace('<','&lt;',$htmlStr); 
		$xmlStr=str_replace('>','&gt;',$xmlStr); 
		$xmlStr=str_replace('"','&quot;',$xmlStr); 
		$xmlStr=str_replace("'",'&#39;',$xmlStr); 
		$xmlStr=str_replace("&",'&amp;',$xmlStr); 
		return $xmlStr; 
	}

	header("Content-type: text/xml; charset=iso-8859-7");

	$lines = file("pred.csv");
//	echo sizeof($lines)."  ";
	$la=0;
	$row=0;
	foreach ($lines as $line_num => $line) {
	//	$line = str_replace(',', '.', $line);
	//	echo $line;
		if ($line_num==0) {
			// $pieces = explode(",", $line);
			
			// $j=0;
			// for($i=2; $i<sizeof($pieces)-1; $i++){
			// 	$lon[$j] = $pieces[$i];
			// 	$j++;
			// }
			
			/*
			for($i=0; $i<sizeof($lon); $i++){
				echo $lon[$i].", ";
			}
			echo "    ---   ".sizeof($lon);
			echo "<br><br>";
			*/
		}else{
			$pieces = explode(";", $line);
			$data[$row][0] = $pieces[0];
			$data[$row][1] = $pieces[1];
			
			// if( $line_num != sizeof($lines)-1 ) {
			// 	$lat[$la] = $pieces[1];
			// 	$la++;
			
				// for($i=2; $i<sizeof($pieces)-1; $i++){
				// 	if( $pieces[$i]=="" ) $pieces[$i]=0;
				// 	$data[$row][$col] = $pieces[$i];
				// 	$col++;
				// }
				$row++;
			// }
			
		}
	}

	/*
	for($i=0; $i<sizeof($lat); $i++){
		echo $lat[$i].", ";
	}
	echo "    ---   ".sizeof($lat);
	echo "<br><br>";
	
	for($row=0; $row<sizeof($data); $row++){
		for($col=0; $col<sizeof($data[$row]); $col++){
			echo $data[$row][$col].", ";
		}
		echo "    ---   ".sizeof($data[$row]);
		echo "<br><br>";
	}
	*/
	
	// echo '<markers>';
	// $j=1;
	// for($row=0; $row<sizeof($data); $row++){
	// 	for($col=0; $col<sizeof($data[$row]); $col++){
	// 		echo '<marker ';
	// 		echo 'id="' . $j . '" ';
	// 		echo 'lat="' . $lat[$row] . '" ';
	// 		echo 'lng="' . $lon[$col] . '" ';
	// 		echo 'num="' . $data[$row][$col] . '" ';
	// 		echo '/>';
			
	// 		$j++;
	// 	}
	// }
	// echo '</markers>';





	echo '<markers>';	// for($row=0; $row<sizeof($data); $row++){
	for($row=0; $row<sizeof($data); $row++){
		echo '<marker ';
		echo 'lat="' . $data[$row][0] . '" ';
		echo 'lng="' . $data[$row][1] . '" ';
		echo '/>';
			// $j++;
		// }
	}
	echo '</markers>';
?>