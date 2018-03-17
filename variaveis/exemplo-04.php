<?php

//VARIAVEIS PRÉ-DEFINIDAS OU ARRAYS SUPER GLOBAIS

$nome = (int)$_GET["a"]; //http://localhost/variaveis/exemplo-04.php?a=123
//var_dump($nome);

$ip = $_SERVER["SCRIPT_NAME"];
echo $ip;
?>