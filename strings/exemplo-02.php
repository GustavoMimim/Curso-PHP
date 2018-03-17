<?php

$nome = "gustavo bergamo";

$nome = strtoupper($nome); //essa função transforma todas as letras em maiúsculas
echo $nome;

echo "<br>";

$nome = strtolower($nome); // transforma tudo em minúsculo
echo $nome;

echo "<br>";

$nome = ucfirst($nome); //muda só a primeira letra
echo $nome;

echo "<br>";

echo ucwords($nome); //muda em toda 1º letra de cada palavra
?>