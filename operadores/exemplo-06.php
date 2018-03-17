<?php

$a = NULL;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c; //se a variavel $a for nulo, ele exibe a variavel $b, se $b também for nulu, ele exibi o $c

?>