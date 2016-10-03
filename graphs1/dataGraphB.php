<?php
	session_start();
	include("../inc/database.php");
	$b=$_GET['b1'];
	$sqlgraph = $_SESSION['sqlb1'.$b];
	$resultgraph = mysqli_query($con, $sqlgraph);

	$sqlgroupyear = $_SESSION['sqlbyear1'.$b];
	$result = mysqli_query($con, $sqlgroupyear);
	$i = 0;
	$tempyear = 0;
	$tempx = 0;
	$a = 0;
	while($row = mysqli_fetch_array($result)) {
		$yearGroup[$i] = $row['year'];
		$monthGroup[$i] = $row['month'];

		if($tempyear!=0){
			if( ($yearGroup[$i]-$tempyear)==1 ){
				if($tempx!=12){
					$tmp = $tempx;
					for($aa=0; $aa<(12-$tmp); $aa++){
						$tempx++;
						$xAxis[$a] = $tempx;
						$totalearthquakes[$a] = 0;
						$min[$a] = 0;
						$max[$a] = 0;
						$steps[$a] = 0;
			//			if($steps[$a]==0) $steps[$a]=1;
						$a++;
					}
				}
				$tempx = 0;
			}
		}
		if( ($monthGroup[$i]-$tempx)!=1 ){
			$counter = $monthGroup[$i]-$tempx-1;
			$z = 0;		
			while($z<$counter){			
				$tempx++;
				$xAxis[$a] = $tempx;
				
				$totalearthquakes[$a] = 0;
				$min[$a] = 0;
				$max[$a] = 0;
				$steps[$a] = 0;
	//			if($steps[$a]==0) $steps[$a]=1;

				$z++;
				$a++;
			}
		}
		

		if($tempyear == $yearGroup[$i]){
			$xAxis[$a] = $monthGroup[$i];
		}else{
			$xAxis[$a] = $monthGroup[$i]." / ".$yearGroup[$i];
			$tempyear = $yearGroup[$i];
		}
			
		$totalearthquakes[$a] = $row['totalearthquakes'];
		$min[$a] = $row['minMagn'];
		$max[$a] = $row['maxMagn'];
		$steps[$a] = round( $row['steps'] );
		if($steps[$a]==0) $steps[$a]=1;
		//	echo $steps[$i]."<br>";
			
		

		$tempx = $monthGroup[$i];
		$i++;
		$a++;
	}
	for($y=0; $y<count($xAxis); $y++){
	//	echo $xAxis[$y]."  ->  ".$min[$y]." ".$max[$y]."<br>";
	}

	$i = 0;
	while($rowgraph = mysqli_fetch_array($resultgraph)) {
		$megethos[$i] = $rowgraph['megethos'];
		$year[$i] = $rowgraph['year'];
		$month[$i] = $rowgraph['month'];
		$i++;
	}

	$DM = 0.2;
	$x = 0;
// echo $steps[0];
	for($y=0; $y<count($xAxis); $y++){
		$sumParanomastis = 0;
	//	echo $x."--> ";
	//	echo $y."--> ||| <br>";
		for($i=1; $i<=$steps[$y]; $i++){
			$tempMax = $min[$y] + $i*$DM;
		//	$tempMin = $tempMax - $DM;
			$counter = 0;
		//	echo $tempMax." ";
		//	$temp = $x;
			for($z=0; $z<$totalearthquakes[$y]; $z++){

	//			echo $x." - ".$megethos[$x]." - ".$year[$x]." -- ";
				if($megethos[$x]>=$min[$y] && $megethos[$x]<=$tempMax){
	//			echo " [thesi:".$x."  step:".$i." ::".$min[$y]."-".$tempMax."  ->  ";
					$counter++;
					
		//			echo $counter." , ".$megethos[$x]."]  ";
		//			echo $megethos[$x];
				}
				$x++;
				
			}
			
			$sumParanomastis += $i*$counter;
	//		echo " suparam:".$sumParanomastis;
	//		echo "<br>";
			$x -= $totalearthquakes[$y];
			
		}
	//	echo " paranom:".$totalearthquakes[$y]."/".$sumParanomastis."<br>";
		$x += $totalearthquakes[$y];
		if($sumParanomastis!=0){
			$logarithmos = 1 + $totalearthquakes[$y]/$sumParanomastis;
			$b1[$y] = round( log($logarithmos, 10)/$DM, 4);
		}else{
			$b1[$y] = 0;
		}
	//	echo " log:".$logarithmos;
		
	//	echo $b1[$y];
	//	echo " <br> ";
	//	echo " <br>-----<br> ";
	}
//	echo $logarithmos."   -";
/*
	$i = 0;
	while($rowgraph = mysql_fetch_array($resultgraph)) {
		$megethos[$i] = $rowgraph['megethos'];
		$year[$i] = $rowgraph['year'];
		$i++;
	}
	$x = 0;

	for($y=0; $y<count($xAxis); $y++){
		$sumEnergy[$y] = 0;
		for($z=0; $z<$totalearthquakes[$y]; $z++){
			$energyPerMagn = 1.5*$megethos[$x]+4.7;

			$energy = round(pow( pow(10, $energyPerMagn), 2/3));
			$x++;
			$sumEnergy[$y] += round($energy/1000000, 4);
		//	echo $sumEnergy[$y]."<br>";
		}
	}



	
	for($y=0; $y<count($xAxis); $y++){
	//	echo $xAxis[$y]."  ->  ";
	//	echo $b1[$y]."<br>";
	}
*/
//	$_SESSION['energy1']=$sumEnergy;

	$_SESSION['b1']=$b1;
	$_SESSION['year1']=$xAxis;
	mysqli_free_result($resultgraph);
	mysqli_free_result($result);
?>
