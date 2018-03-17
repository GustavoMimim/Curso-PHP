<?php

$pessoa = array(
    'nome'=>'Gustavo',
    'idade'=>18
);

//passagem por referencia &$var
foreach($pessoa as &$value){ 

    if(gettype($value) === 'integer') //se o valor e o tipo for inteiro somar 10
        $value +=10;

    echo $value . '<br>';
}

?>