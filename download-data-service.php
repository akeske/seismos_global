<?php
set_error_handler("silence_handler", E_WARNING | E_NOTICE);
$error = "";
$index = 0;

function silence_handler($errno, $errstr) {
}

function getQuakeType($magnitude, $depth) {
    if ($depth<15) {
        if ($magnitude<=2.5)
            return 0;
        else if ($magnitude<=4)
            return 1;
        else if ($magnitude<=5)
            return 2;
        else
            return 3;
    }else if($depth<30) {
        if ($magnitude<=2.5)
            return 4;
        else if ($magnitude<=4)
            return 5;
        else if ($magnitude<=5)
            return 6;
        else
            return 7;
    }else if($depth<60) {
        if ($magnitude<=2.5)
            return 8;
        else if ($magnitude<=4)
            return 9;
        else if ($magnitude<=5)
            return 10;
        else
            return 11;
    }else if($depth<100) {
        if ($magnitude<=2.5)
            return 12;
        else if ($magnitude<=4)
            return 13;
        else if ($magnitude<=5)
            return 14;
        else
            return 15;
    }else{
        if ($magnitude<=2.5)
            return 16;
        else if ($magnitude<=4)
            return 17;
        else if ($magnitude<=5)
            return 18;
        else
            return 19;
    }
}

function getQuakeTypeSize($magnitude)
{
    if ($magnitude < 3)
         return 1; //
    else if ($magnitude < 4)
         return 2; // mauro
    else if ($magnitude < 5)
         return 3; // prasino
    else if ($magnitude < 6)
         return 4; // kokkino
    else
         return 5; // kitrino
}

function getYear($date){
    return substr($date, 0,4);
}

function getMonth($date){
    return substr($date, 5,2);
}

session_start();
include("inc/database.php");
$url = "https://www.seismicportal.eu/fdsnws/event/1/query";
$default_params = "&limit=1000&format=json";



try {
    $data = json_decode(file_get_contents('php://input'), true);
    $url = sprintf("%s?%s", $url, http_build_query($data));
    $url = $url . $default_params;

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $resultsJson = curl_exec($curl);
    curl_close($curl);

    $results = json_decode($resultsJson);

    //$stmt = $pdo->prepare('INSERT INTO `seismos` (`idyear`, `year`, `month`, `name`, `info`, `lat`, `lng`, `megethos`, `vathos`, `type`, `typeSize`, `date`)
    //                                VALUES (:idyear, :year, :month,:name, :info,:lat, :lng,:megethos, :vathos,:type, :typeSize, :date)');
    foreach ($results->features as $feature) {
		$properties = $feature->properties;

    	if($properties->depth > 0){
			$index++;

			$name = "Global[" . getYear($properties->time) . "][" . $index . "]";
			$prepared_data = array(
				':idyear' => $index,
				':year' => getYear($properties->time),
				':month' => getMonth($properties->time),
				':name' => "'" . $name . "'",
				':info' => "''",
				':lat' => $properties->lat,
				':lng' => $properties->lon,
				':megethos' => $properties->mag,
				':vathos' => $properties->depth,
				':type' => getQuakeType($properties->mag, $properties->depth),
				':typeSize' => getQuakeTypeSize($properties->mag),
				':date' => "'" . explode(".", $properties->time)[0] . "'");

			//    $stmt->execute($prepared_data);

			$sqlDb = "INSERT INTO `seismos` (`idyear`, `year`, `month`, `name`, `info`, `lat`, `lng`, `megethos`, `vathos`, `type`, `typeSize`, `date`) VALUES("
				. $prepared_data[':idyear'] . ","
				. $prepared_data[':year'] . ","
				. $prepared_data[':month'] . ","
				. $prepared_data[':name'] . ","
				. $prepared_data[':info'] . ","
				. $prepared_data[':lat'] . ","
				. $prepared_data[':lng'] . ","
				. $prepared_data[':megethos'] . ","
				. $prepared_data[':vathos'] . ","
				. $prepared_data[':type'] . ","
				. $prepared_data[':typeSize'] . ","
				. $prepared_data[':date'] . ")";

			if (mysqli_query($con, $sqlDb)) {
			} else {
				$error = $error . "Error : " . mysqli_error($con) . $prepared_data[':vathos'];
			}
		}

    }
} catch (Exception $e) {
    $error = $error . $e;
}
echo $error != "" ? $error : "Loaded ". $index . " earthquakes";
