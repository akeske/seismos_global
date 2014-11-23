<?php
$time_start = microtime(true);
	$counter=0;
	
	$lines = file("global.csv");

	$i=0;
	foreach ($lines as $line_num => $line) {
		if ($line_num==0 || $line_num==1) { continue; }
		if ($line[0]=="1") { continue; }
		$pieces = explode(",", $line);

		$datetime = explode("T", $pieces[0]);
		$date[$i] = $datetime[0];
		$datepieces = explode("-", $date[$i]);
		$etos[$i] = $datepieces[0];
		$month[$i] = $datepieces[1];
		$mera[$i] = $datepieces[2];

		$time[$i] = $datetime[1];
		$timepieces = explode(":", $time[$i]);
		$wra[$i] = $timepieces[0];
		$lepta[$i] = $timepieces[1];
		$deut[$i] = $timepieces[2];

		
		$lat[$i] =  $pieces[1];
		$long[$i] = $pieces[2];
		$depth[$i] = $pieces[3];
		if($depth[$i]==""){
			$depth[$i] = 9999;
		}
		$magnitude[$i] = $pieces[4];
		$counter++;

		$i++;
	}
	for($b=0;$b<$counter;$b++) {
		$finaldate[$b] = $etos[$b]."-".$month[$b]."-".$mera[$b]." ".$wra[$b].":".$lepta[$b].":".$deut[$b];
		if ($depth[$b]<15) {
			if ($magnitude[$b]<=2.5)
				$type[$b]=0;
			else if ($magnitude[$b]<=4)
				$type[$b]=1;
			else if ($magnitude[$b]<=5)
				$type[$b]=2;
			else
				$type[$b]=3;
		}else if($depth[$b]<30) {
			if ($magnitude[$b]<=2.5)
				$type[$b]=4;
			else if ($magnitude[$b]<=4)
				$type[$b]=5;
			else if ($magnitude[$b]<=5)
				$type[$b]=6;
			else
				$type[$b]=7;
		}else if($depth[$b]<60) {
			if ($magnitude[$b]<=2.5)
				$type[$b]=8;
			else if ($magnitude[$b]<=4)
				$type[$b]=9;
			else if ($magnitude[$b]<=5)
				$type[$b]=10;
			else
				$type[$b]=11;
		}else if($depth[$b]<100) {
			if ($magnitude[$b]<=2.5)
				$type[$b]=12;
			else if ($magnitude[$b]<=4)
				$type[$b]=13;
			else if ($magnitude[$b]<=5)
				$type[$b]=14;
			else
				$type[$b]=15;
		}else{
			if ($magnitude[$b]<=2.5)
				$type[$b]=16;
			else if ($magnitude[$b]<=4)
				$type[$b]=17;
			else if ($magnitude[$b]<=5)
				$type[$b]=18;
			else
				$type[$b]=19;
		}
		if ($magnitude[$b]<3)
			$typeSize[$b]=1; //
		else if ($magnitude[$b]<4)
			$typeSize[$b]=2; // mauro
		else if ($magnitude[$b]<5)
			$typeSize[$b]=3; // prasino
		else if ($magnitude[$b]<6)
			$typeSize[$b]=4; // kokkino
		else
			$typeSize[$b]=5; // kitrino
	}

	for($d=0;$d<$counter;$d++) {
		$sqlDb = "INSERT INTO `seismos` (`idyear`, `year`, `month`, `name`, `info`, `lat`, `lng`, `megethos`, `vathos`, `type`, `typeSize`, `date`) VALUES
		($d, $etos[$d], $month[$d], 'Global[$etos[$d]][$d]', '', $lat[$d], $long[$d], $magnitude[$d], $depth[$d], $type[$d], $typeSize[$d], '$finaldate[$d]' )";
		// Execute query
	//	echo $sqlDb."<br>";
		if ( mysqli_query($con, $sqlDb) ) {
		}else{
			echo "Error : " . mysqli_error($con)."</br>";
		}
	}

	unset($line);
	unset($etos);
	unset($minas);
	unset($mera);
	unset($lat);
	unset($long);
	unset($depth);
	unset($magnitude);
	unset($char);
	unset($j);
	echo "Έχουν γίνει ".$counter." σεισμοί<br>";

$time_end = microtime(true);
$time = $time_end - $time_start;
echo "<br> Χρόνος για την εισαγωγή των δεδομένων: ".$time." δευτερόλεπτα<br><br>";

?>
