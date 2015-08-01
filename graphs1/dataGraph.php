<?php
	session_start();
	include("../inc/database.php");
	$k=$_GET['k1'];
	$sqlgraph = $_SESSION['sqlgraphD1'.$k];
	$resultgraph = mysqli_query($con, $sqlgraph);
	$rowgraph = mysqli_fetch_array($resultgraph);
	$dategr = $rowgraph['date'];
	$parts3 = explode ('-' , $dategr);
	$fdate=$parts3[0];
	$firstyear=$fdate;
	$count=1;
	$i=0;
	
	while($rowgraph = mysqli_fetch_array($resultgraph)) {
		$dategr = $rowgraph['date'];
		$dategrap = trim($dategr, '-');
		$parts3 = explode ('-' , $dategrap);
		if( $parts3[0]!=$fdate ){
			if( $parts3[0]-$fdate>1 ){
				$ar[$i]=$count;
				$i++;
				$plithos=$parts3[0]-$fdate;
				for($j=1; $j<$plithos; $j++){
					$ar[$i]=0;
					$i++;
				}
				$fdate=$parts3[0];
				$count=1;	
			}else{
				$fdate=$parts3[0];
				$ar[$i]=$count;
				$i++;
				$count=1;
			}
		}else{
			$count++;
		}
	}
	$lastyear=$parts3[0];
	$flag=false;
	if($lastyear-$firstyear>15) {
		$flag=true;
	}
	$y=0;
	
	if($flag==true) {
		$xyear[$y]=$firstyear;
		$y=$y+1;
		$counter=0;
		for( $q=$firstyear+1; $q<=$lastyear; $q++) {
		if($counter==1){
				$xyear[$y]=$q;
				$y=$y+1;
				$counter=0;
			}else{
				$xyear[$y]="";
				$y=$y+1;
				$counter++;
			}
		}
	}else{
		for( $q=$firstyear; $q<=$lastyear; $q++) {
				$xyear[$y]=$q;
				$y=$y+1;
		}
	}
	$ar[$i]=$count;
	$i=$i+1;
	$counter=1;
	for($j=$lastyear+1; $j<=$_SESSION['toyear1']; $j++) {
		if($flag==true) {
			if($counter==1){
				$xyear[$y]=$j;
				$ar[$i]=0;
				$i=$i+1;
				$y=$y+1;
				$counter=0;
			}else{
				$xyear[$y]="";
				$ar[$i]=0;
				$i=$i+1;
				$y=$y+1;
				$counter++;
			}
		}else{
			$ar[$i]=0;
			$xyear[$y]=$j;
			$y=$y+1;
			$i=$i+1;
		}
	}
	
	$_SESSION['xyearD1']=$xyear;
	
	$sum=0;
	for($d=0;$d<count($ar);$d++){		
		$sum+=$ar[$d];
		$send[$d]=$sum;
	}
	$_SESSION['sendD1']=$send;
	mysqli_free_result($resultgraph);
?>
