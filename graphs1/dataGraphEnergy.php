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

	$i = 0;
	while($rowgraph = mysql_fetch_array($resultgraph)) {
		$megethos[$i] = $rowgraph['megethos'];
		$year[$i] = $rowgraph['year'];
		$i++;
	}

	$x = 0;
// echo $steps[0];
	for($y=0; $y<count($xAxis); $y++){
		$sumEnergy[$y] = 0;
		for($z=0; $z<$totalearthquakes[$y]; $z++){
			$energyPerMagn = 1.5*$megethos[$x]+4.7;

			$energy = round(pow( pow(10, $energyPerMagn), 2/3));
			$x++;
			$sumEnergy[$y] += round($energy/1000000000, 4);
		//	echo $sumEnergy[$y]."<br>";
		}
	}



	$_SESSION['energy1']=$sumEnergy;
	$_SESSION['year1']=$xAxis;
	mysqli_free_result($resultgraph);
	mysqli_free_result($result);
?>
