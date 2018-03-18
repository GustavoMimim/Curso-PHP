<?php

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

echo "<br>";

// Adiciona $periodo a variavel $dt
$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s");

?>