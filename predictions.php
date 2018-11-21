<?php
require "vo/Prediction.php";
require "vo/PredictionPoint.php";
//header("Content-type: text/xml; charset=iso-8859-7");
$folderPath = "data/csv";
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
    $result = new Prediction($fileName);
    $predictionPoints = [];
    foreach ($lines as $line_num => $line) {
        if ($line_num != 0) {
            $pieces = explode(",", $line);
            array_push($predictionPoints, new PredictionPoint($pieces[0], $pieces[1]));
            $row++;
        }
    }
    $result->setPredictions($predictionPoints);
    array_push($results, $result);
}
//print_r( $results);
echo json_encode($results);
?>