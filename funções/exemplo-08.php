<?php

//funções anônimas
function test($callback){

    //processo lento

    $callback(); //pode servir para que a execução de um processo lento não caia em timeout 

}

test(function(){

    echo "Terminou!"; //Em um caso real, poderia ser o envio de um email ou insert no banco
    
});

?>