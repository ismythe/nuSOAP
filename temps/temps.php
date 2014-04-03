<?php
require_once ('lib/nusoap.php');

$wsdl = "http://www.webservicex.net/globalweather.asmx?wsdl";

$ciutat = $_POST["ciutat"];
$pais = $_POST["pais"];
$client = new nusoap_client($wsdl, 'wsdl');
$params = array('CityName' => $ciutat, 'CountryName' => $pais);
$result = $client->call("GetWeather", $params);

$err = $client->getError();
if ($err) {
    echo '<p><b>Error: ' . $err . '</b></p>';
} else if($result[GetWeatherResult]=='Data Not Found'){
	echo '<p>Error: '.$ciutat.' no es troba a la base de dades.';
}else{

print_r('<h2>El temps a '.$ciutat.', '.$pais.'</h2><p>'.$result[GetWeatherResult].'</p>');	
}
?>