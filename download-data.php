<?php
session_start();
include("inc/database.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Insert data to database</title>
	<link rel="SHORTCUT ICON" href="favicon.ico">
	<meta http-equiv="content-language" content="gr">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="geo.region" content="en-US,GR">
	<meta name="Description" content="">
	<meta name="Keywords" content="">
	<meta name="robots" content="index,follow">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/mycss.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="js/download-data.js"></script>
</head>
<body>
	<div id="header">
	<h3>Earthquake Prediction - Global</h3>
	</div>
	<div id="container">
	<?php include("menu.php"); ?>
		<?php
			if($logged_in){
				echo "Δεν είστε συνδεδεμένος";
			} else {
			//	if($_SESSION['installcan'] ==0){ ?>
                <br><br>
                <table class="font-size-small table table-condensed table-striped table-bordered table-hover" id="dataParams">
                    <thead>
                    <tr>
                        <th>Group</th><th>Parameter</th><th>Abbrevation</th><th>Value</th><th>Default</th><th>Minimum</th><th>Maximum</th><th>Type</th><th>Units</th>
                    </tr>
                    </thead>

                    <tr>
                        <td colspan="9">time constraints</td>
                    </tr>
                    <tr>
                        <td></td><td>starttime</td><td>start</td><td><input type="text" placeholder="YYYY-MM-DDTHH:MM:SS.ssssss" id="start"/></td><td>[Any]</td><td>[Any valid time]</td><td>[Any valid time]</td><td>Time</td><td>UTC</td>
                    </tr>
                    <tr>
                        <td></td><td>endtime</td><td>end</td><td><input type="text" id="end"/></td><td>[Any]</td><td>[Any valid time]</td><td>[Any valid time]</td><td>Time</td><td>UTC</td>
                    </tr>

                    <tr>
                        <td colspan="9">geographics constraints</td>
                    </tr>
                    <tr>
                        <td></td><td colspan="8">box area constraints</td>
                    </tr>
                    <tr>
                        <td></td><td>minlatitude</td><td>minlat</td><td><input type="text" id="minlat"/></td><td>-90.0</td><td>-90.0</td><td>90.0</td><td>float</td><td>degrees</td>
                    </tr>
                    <tr>
                        <td></td><td>maxlatitude</td><td>maxlat</td><td><input type="text" id="maxlat"/></td><td>-90.0</td><td>-90.0</td><td>90.0</td><td>float</td><td>degrees</td>
                    </tr>

                    <tr>
                        <td></td><td>minlongitude</td><td>minlon</td><td><input type="text" id="minlon"/></td><td>-180.0</td><td>-180.0</td><td>180.0</td><td>float</td><td>degrees</td>
                    </tr>
                    <tr>
                        <td></td><td>maxlongitude</td><td>maxlon</td><td><input type="text" id="maxlon"/></td><td>-180.0</td><td>-180.0</td><td>180.0</td><td>float</td><td>degrees</td>
                    </tr>

                    <tr>
                        <td colspan="9">other parameters</td>
                    </tr>
                    <tr>
                        <td></td><td>mindepth</td><td></td><td><input type="text" id="mindepth"/></td><td>[Any]</td><td>[Any]</td><td >[ANY]</td><td>float</td><td>kilometers</td>
                    </tr>
                    <tr>
                        <td></td><td>maxdepth</td><td></td><td><input type="text" id="maxdepth"/></td><td>[Any]</td><td>[Any]</td><td >[ANY]</td><td>float</td><td>kilometers</td>
                    </tr>

                    <tr>
                        <td></td><td>minmagnitude</td><td>minmag</td><td><input type="text" id="minmag"/></td><td>[Any]</td><td>[Any]</td><td >[ANY]</td><td>float</td><td></td>
                    </tr>
                    <tr>
                        <td></td><td>maxmagnitude</td><td>maxmag</td><td><input type="text" id="maxmag"/></td><td>[Any]</td><td>[Any]</td><td >[ANY]</td><td>float</td><td></td>
                    </tr>
                </table>
            <?php } ?>

        <div><button onclick="postAllInputsInElement('dataParams')">Download</button></div>
	</div>

	<div id="foot">
	</div>
	<script>
        document.getElementById('start').value = getCurrentDate();
    </script>
</body>
</html>