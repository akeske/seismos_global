
<table align="center" border="0" style="font-size:12px;">
	<tr>
		<td> <?php
			if($_SESSION['fromdate1']=="" || $_SESSION['todate1']=="") {
				echo "From date: <b> / / </b> to date: <b> / / </b>";
			}else{
				echo "From date: <b>".$_SESSION['fromdate1']."</b> to date: <b>".$_SESSION['todate1']."</b>";
			}
			echo "<br>"; ?>
		</td>
	</tr>
	<tr>
		<td> <?php 
			echo "From lat: <b>".$flat[$j]."</b> to lat: <b>".$tlat[$j]."</b>";
			echo "<br>"; ?>
		</td>
	</tr>
<?php  // echo $ua['name']; ?>
<table style="border: 2px solid #97AEC4;">
	<tr>
		<td> <?php
		for($i=0; $i<$diastaseis; $i++) {
			include('createsqlGraph1.php'); ?>
			<table cellpadding="4" cellspacing="4" style="font-size:12px;">
			<tr>
				<td>
					<A name="<?php echo $k1."a"; ?>"><?php echo $k1+1; ?></A>
				</td>
				<td align="left"> <?php
					echo "From lng: <b>".$flng[$i]."</b> to lng: <b>".$tlng[$i]."</b>";
					echo "<br>";
					echo "There have been <b>".$total_recordsD1."</b>  earthquakes";
					echo "<br>";
					echo "Calculation time <b>".$time1."</b> seconds"; unset($time1); ?>
				</td>
				<td width="50">
					<font style="font-size:12px;">
						<form>
						<?php
						if ( $ua['name']=='Mozilla Firefox'  || $ua['name']=='Google Chrome' ) { ?>
							<input style="font-size:12px;" type="button" value="Graph 1" onClick="window.open('graphs1/graph.php?k1=<?php echo $k1; ?>','Graph 1',' width=900,height=600')"/>
							<input style="font-size:12px;" type="button" value="Graph 2" onClick="window.open('graphs1/graphMagn.php?l1=<?php echo $k1; ?>','Graph 2',' width=900,height=600')"/>
						<?php }else{ ?>
							<a href="graphs1/graph.php?k1=<?php echo $k1; ?>" target="_blank" style="display:block; float:left; height:15px; width:50px; cursor:pointer;"> Graph 1 </a>
							<a href="graphs1/graphMagn.php?l1=<?php echo $k1; ?>" target="_blank" style="display:block; float:right; height:15px; width:50px; cursor:pointer;"> Graph 2 </a>
						<?php } ?>
					<!--	<a onClick="window.open('graphs1/graphMagn.php?l1=<?php echo $k1; ?>','Graph 1',' width=600,height=400')" target="_blank" style="display:block; float:right; height:40px; width:100px; cursor:pointer;"> Graph 2 </a>
							<input type="button" value="Graph 3" onClick="window.open('graphs1/graphmagnyear.php?m1=<?php echo $k1; ?>','Graph 3',' width=600,height=400')"/> -->
					<!--	<input type="button" value="Graph 3" onClick="window.open('graphs1/graphMagnTwoYears.php?n1=<?php echo $k1; ?>','Graph 3',' width=600,height=400')"/> -->
						</form>
					</font>
				</td>
				<td align="right" width="50">
					<font style="font-size:10px;">
						<form>
							<?php
							if ( $ua['name']=='Mozilla Firefox' ) { ?>
								<input style="font-size:10px;" type="button" value="Graph of b" onClick="window.open('graphs1/graphB.php?b1=<?php echo $k1; ?>','Graph for b',' width=900,height=600')"/>
								<input style="font-size:10px;" type="button" value="Graph of Energy" onClick="window.open('graphs1/graphEnergy.php?b1=<?php echo $k1; ?>','Graph for b',' width=900,height=600')"/>
							<?php }else{ ?>
								<a href="graphs1/graphB.php?b1=<?php echo $k1; ?>" target="_blank" style="display:block; float:left; height:15px; width:50px; cursor:pointer;"> Graph for b </a>
								<a href="graphs1/graphEnergy.php?b1=<?php echo $k1; ?>" target="_blank" style="display:block; float:left; height:15px; width:50px; cursor:pointer;"> Graph for Energy</a>
							<?php } ?>
						</form>
					</font>
				</td>
				<td>
					<a href="#top"> <img src="images/hand.png" alt="Go up" width="20">  </a>
				</td>
			</tr>
			</table> <?php
			
			//for xml file
			$k1=$k1+1;
			
			//for xml file
			if($j==0){
				$_SESSION['flngxml'.$i]=$flng[$i];
				$_SESSION['tlngxml'.$i]=$tlng[$i];
			} ?>
			<div style="height:400px; width:390px; overflow:auto;">
			<table id="rounded-corner">
			<thead>
				<tr>
					<th align="center" width="0" bgcolor="#151B54">ID</th>
					<th align="center" width="0" bgcolor="#151B54">Latitude</th>
					<th align="center" width="0" bgcolor="#151B54">Longitude</th>
					<th align="center" width="0" bgcolor="#151B54">Magnitude</th>
					<th align="center" width="0" bgcolor="#151B54">Depth</th>
				<!--	<th align="center" width="0" bgcolor="#151B54">Type</th> -->
					<th align="center" width="0" bgcolor="#151B54">Date</th>
			</thead>
			
			
			<tbody>
				</tr>
					<?php
					$color=0;
					$count=1;
					while($row = mysqli_fetch_array($resultD1)) {
					//	$id = $row['id'];
					//	$name = $row['name'];
					//	$info = $row['info'];
						$lat = $row['lat'];
						$lng = $row['lng'];
						$lat = number_format($lat, 2, '.', '');
						$lng = number_format($lng, 2, '.', '');
						$megethos = $row['megethos'];
						$vathos = $row['vathos'];
						$type = $row['type'];
						$date = $row['date'];
						if ($color==0) {
							$color=1; ?>
				<tr bgcolor="#3090C7"> <?php }else{
							$color=0; ?>
				<tr bgcolor="#1569C7"> <?php } ?>
					<td align="center">
						<?php echo "$count"; ?>
					</td>
					<td align="center">
						<?php echo "$lat"; ?>
					</td>
					<td align="center">
						<?php echo "$lng"; ?>
					</td>
					<td align="center">
						<?php echo "$megethos"; ?>
					</td>
					<td align="center">
						<?php echo "$vathos"; ?>
					</td>
					<!--
					<td align="center">
						<?php echo "$type"; ?>
					</td>
					-->
					<td align="center">
						<?php echo "$date"; ?>
					</td>
				</tr>
			</tbody> <?php
				$count=$count+1; }
				mysqli_free_result($resultD1); ?>
			</table> </div><?php
		} ?>
		</td>
	</tr>
</table>
