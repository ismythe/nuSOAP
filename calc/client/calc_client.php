<?php
require_once ('lib/nusoap.php');
$wsdl = "http://localhost/fp/m7/serveis/calc/servidor/calc_server.php?wsdl";
$num = $_POST["num"];
$num2 = $_POST["num2"];
$operacio = $_POST["oper"];
$nclient = new nusoap_client($wsdl, 'wsdl');
$params = array('a' => $num, 'b' => $num2);
$result = $nclient->call($operacio, $params);
$err = $nclient->getError();
if ($err) {
    echo '<p><b>Error: ' . $err . '</b></p>';
} else {
    echo ("<p>La " . strtolower($operacio) . " entre " . $num . " i " . $num2 . " &eacute;s: " . $result . "</p>");
}
?>



