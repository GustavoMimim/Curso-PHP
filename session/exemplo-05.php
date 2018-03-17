<?php

require_once("config.php");

session_regenerate_id(); //cria uma nova id da sessão

echo session_id();

var_dump($_SESSION);

echo "<br>";

echo session_save_path(); //mostra a pasta que está salvando a sessão

var_dump(session_status());

/* Verifica as sessões */
switch(session_status()) {

    case PHP_SESSION_DISABLED:
    echo "<br> as sessões estiveram desabilitadas";
    break;

    case PHP_SESSION_NONE:
    echo "<br> as sessões estiveram habilitadas, mas nenhuma existir";
    break;

    case PHP_SESSION_ACTIVE:
    echo "<br> as sessões estiveram habilitadas, e uma existir";
    break;
}

?>