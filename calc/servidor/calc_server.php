<?php
require_once 'lib/nusoap.php';

$soap = new soap_server;
$soap->configureWSDL('AddService', 'http://localhost/fp/m7/serveis/calc/servidor/');
$soap->wsdl->schemaTargetNamespace = 'http://localhost/fp/m7/serveis/calc/servidor/';
$soap->register('Suma', array('a' => 'xsd:int', 'b' => 'xsd:int'), array('c' => 'xsd:int'), 'http://localhost/fp/m7/serveis/calc/servidor/');
$soap->register('Resta', array('a' => 'xsd:int', 'b' => 'xsd:int'), array('c' => 'xsd:int'), 'http://localhost/fp/m7/serveis/calc/servidor/');
$soap->register('Multiplicacio', array('a' => 'xsd:int', 'b' => 'xsd:int'), array('c' => 'xsd:int'), 'http://localhost/fp/m7/serveis/calc/servidor/');
$soap->register('Divisio', array('a' => 'xsd:int', 'b' => 'xsd:int'), array('c' => 'xsd:float'), 'http://localhost/fp/m7/serveis/calc/servidor/');
$soap->service(isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '');

function Suma($a, $b) {
    return $a + $b;
}
function Resta($a, $b) {
    return $a - $b;
}
function Multiplicacio($a, $b) {
    return $a * $b;
}
function Divisio($a, $b) {
    return $a / $b;
}
?>

