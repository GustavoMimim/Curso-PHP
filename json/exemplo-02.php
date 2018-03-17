<?php

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true);  //transforma json em array, se n colocar o true ele transforma em objeto

var_dump($data);

?>