<?php
require "vo/PlanetPrediction.php";
require "vo/Prediction.php";
require "vo/PredictionPoint.php";
//header("Content-type: text/xml; charset=iso-8859-7");
$folderPath = "data/planet-csv";
$files = null;
$data  = null;

if (isset($_GET['file'])) {
    $files[0] = $_GET['file'];
} else {
    $files = preg_grep('~\.(csv)$~', scandir($folderPath));
}

$results = [];

foreach ($files as $file){
    $lines = file($folderPath . "/" . $file);
    $fileName = explode(".", $file)[0];
    $la=0;
    $row=0;
    $result = new PlanetPrediction($fileName);
	$predictionPoints = [];
    foreach ($lines as $line_num => $line) {
        if ($line_num != 0) {
            $pieces = explode(",", $line);
            if($pieces[0] != ''){
				$planets = preg_split('/(?=[A-Z])/',$pieces[2]);
				foreach ($planets as $planet) {
					if(!isset($predictionPoints[$planet])) {
						$predictionPoints[$planet] = [];
					}
					array_push($predictionPoints[$planet], new PredictionPoint($pieces[0], $pieces[1]));
				}
			}
            $row++;
        }
    }

	$predictions = [];

	foreach ($predictionPoints as $key => $predictionPoint){
		$prediction = new Prediction($key);

		$prediction->setPredictions($predictionPoint);
		array_push($predictions, $prediction);
	}

    $result->setPredictions($predictions);
    array_push($results, $result);
}
//print_r( $results);
echo json_encode($results);
?>