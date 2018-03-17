<?php

$frase = "A repetição é mãe da retenção";

$palavra = "mãe";

$q = strpos($frase, $palavra); //conta quantos caracteres tem até a palavra mãe

$texto = substr($frase, 0, $q); //recebe todos os caracteres de 0 até a variavel $q (mãe)

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); //srtlen retorna o tamanho de uma string 

echo "<br>";

var_dump($texto2);

?>