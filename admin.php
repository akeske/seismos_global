<?php
include("inc/database.php");
include("inc/login-proc.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<link href="css/mycss.css" rel="stylesheet" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>DataBase</title>
</head>

<body>
<div id="header">
	<h3>Earthquake Prediction - Greece</h3>
</div>
<div id="background">
<div id="container">
	<div class="mattblacktabs">
			<ul>
					<li><a href="index.php">Map</a></li>
					<li><a href="install.php">Install database</a></li>
					<li><a href="insertdata.php">Update database</a></li>
					<li class="selected"><a href="admin.php">Admin</a></li>
				</ul>
	</div>
	</br>
	<table width="950" align="center" border="0" style="color:white; font-size: 19px;">
		<tr>
			<th width="25" bgcolor="#151B54">ID</th>
			<th width="200" bgcolor="#151B54">name</th>
			<th width="150" bgcolor="#151B54">info</th>
			<th width="40" bgcolor="#151B54">lat</th>
			<th width="40" bgcolor="#151B54">lng</th>
			<th width="25" bgcolor="#151B54">megethos</th>
			<th width="25" bgcolor="#151B54">vathos</th>
			<th width="25" bgcolor="#151B54">type</th>
			<th width="200" bgcolor="#151B54">date</th>
		</tr>
		<?php
		$i=0;
		$result = mysql_query("SELECT * FROM seismos
					WHERE type>3
					ORDER BY `id` DESC");
		while($row = mysql_fetch_array($result)) {
			$id = $row['id'];
			$name = $row['name'];
			$info = $row['info'];
			$lat = $row['lat'];
			$lng = $row['lng'];
			$megethos = $row['megethos'];
			$vathos = $row['vathos'];
			$type = $row['type'];
			$date = $row['date'];
			if ($i==0) {
				$i=1;
			?>	<tr bgcolor="#3090C7">
			<?php }else{
				$i=0;
			?>	<tr bgcolor="#1569C7">
			<?php } ?>
				<td align="center" width="25">
					<?php echo "$id"; ?>
				</td>
				<td align="left"  width="200">
					<?php echo "$name"; ?>
				</td>
				<td align="left"  width="150">
					<?php echo "$info"; ?>
				</td>
				<td align="left"  width="40">
					<?php echo "$lat"; ?>
				</td>
				<td align="left"  width="40">
					<?php echo "$lng"; ?>
				</td>
				<td align="center"  width="25">
					<?php echo "$megethos"; ?>
				</td>
				<td align="center"  width="25">
					<?php echo "$vathos"; ?>
				</td>
				<td align="center"  width="25">
					<?php echo "$type"; ?>
				</td>
				<td align="center"  width="200">
					<?php echo "$date"; ?>
				</td>
			</tr>
		<?php } ?>
	</table>
	
	<br>
	<br>
	
		<table width="950" align="center" border="0" style="color:white; font-size: 19px;">
		<tr>
			<th width="25" bgcolor="#151B54">ID</th>
			<th width="200" bgcolor="#151B54">name</th>
			<th width="150" bgcolor="#151B54">info</th>
			<th width="40" bgcolor="#151B54">lat</th>
			<th width="40" bgcolor="#151B54">lng</th>
			<th width="25" bgcolor="#151B54">megethos</th>
			<th width="25" bgcolor="#151B54">vathos</th>
			<th width="25" bgcolor="#151B54">type</th>
			<th width="200" bgcolor="#151B54">date</th>
		</tr>
		<?php
		$i=0;
		$result = mysql_query("SELECT * FROM seismos
					WHERE date >= 20110101000000 AND date < 20110401000000 AND type>2
					ORDER BY `id` DESC");
		while($row = mysql_fetch_array($result)) {
			$id = $row['id'];
			$name = $row['name'];
			$info = $row['info'];
			$lat = $row['lat'];
			$lng = $row['lng'];
			$megethos = $row['megethos'];
			$vathos = $row['vathos'];
			$type = $row['type'];
			$date = $row['date'];
			if ($i==0) {
				$i=1;
			?>	<tr bgcolor="#3090C7">
			<?php }else{
				$i=0;
			?>	<tr bgcolor="#1569C7">
			<?php } ?>
				<td align="center" width="25">
					<?php echo "$id"; ?>
				</td>
				<td align="left"  width="200">
					<?php echo "$name"; ?>
				</td>
				<td align="left"  width="150">
					<?php echo "$info"; ?>
				</td>
				<td align="left"  width="40">
					<?php echo "$lat"; ?>
				</td>
				<td align="left"  width="40">
					<?php echo "$lng"; ?>
				</td>
				<td align="center"  width="25">
					<?php echo "$megethos"; ?>
				</td>
				<td align="center"  width="25">
					<?php echo "$vathos"; ?>
				</td>
				<td align="center"  width="25">
					<?php echo "$type"; ?>
				</td>
				<td align="center"  width="200">
					<?php echo "$date"; ?>
				</td>
			</tr>
		<?php } ?>
	</table>
</div>
</div>
</body>

</html>
