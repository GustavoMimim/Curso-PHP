<?php

require_once("config.php");

session_regenerate_id(); //cria uma nova id da sessão

echo session_id();

var_dump($_SESSION);

?>