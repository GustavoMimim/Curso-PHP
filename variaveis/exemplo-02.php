<?php

//A respeito das variáveis, evitar simbolos alem do underline
//Para palavras compostas, colocar a primeira letra da segunda palavra maiúscula  
$anoNascimento = 1999;
$nomeCompleto = "Gustavo Bergamo Mimim";

echo $anoNascimento;
echo "</br>";
echo $nomeCompleto;

echo "</br>";

$nomeData = $anoNascimento . " " . $nomeCompleto; //aspas duplas no meio da concatenação é para dar o espaço entra as duas informaçoes
echo $nomeData;
exit;

// unset exclui a variável
unset($anoNascimento);

//o if abaixo, mostra se a variavel '$anoNascimento' existe, caso verdadeiro, exibi-la
if(isset($anoNascimento)){ 
    echo $anoNascimento;
}

?>