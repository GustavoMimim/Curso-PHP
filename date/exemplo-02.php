<?php

// Converte uma string para timestamp, pode ser usado para fazer resolver expressões usando a data
//$ts = strtotime("2001-09-11");
$ts = strtotime("now +5 days");

// Exibi a data armazenada em $ts no formato: Semana, dia/mês/ano.
echo date("l, d/m/Y", $ts);

?>