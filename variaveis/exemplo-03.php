<?php

//variáveis tipos básicos 
$nome = "Hcode";
$site = 'www.hcode.com.br';
$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

////////////////////////////////////////////////////

//variáveis compostos 
$frutas = array("abacaxi", "laranja", "manga");
//echo $frutas[2];
$nascimento = new DateTime();
//var_dump($nascimento);

/////////////////////////////////////////////////////

//variáveis especiais
$arquivo = fopen("exemplo-03.php", "r");
//var_dump($arquivo);
$nulo = NULL; // variavel não existe, diferente de vazio ($vazio = " ");

?>