<?php
 function getJsonDecode() {
  $jsonempleados = file_get_contents("https://raw.githubusercontent.com/iannabir/METRICAANDINA/master/employees.json");
  $empleados = json_decode($jsonempleados, true);
  return $empleados;
}
 ?>
