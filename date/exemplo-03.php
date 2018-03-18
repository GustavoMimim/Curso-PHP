<?php

// Idioma padrão, padrão utf-8 e padrão do Windows 
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

// Formata uma hora/data de acordo com as configurações locais
// https://secure.php.net/manual/pt_BR/function.strftime.php
echo strftime("%A %B");

echo "<br>";

// ucwords converte o primeiro caractere de cada palavra em maiúsculas 
echo ucwords(strftime("%A %B. Dia nº %j"));

?>