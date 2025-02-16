<?php

$servername = "mysql-connection";
$username = "root";
$password = "Senha123";
$database = "meubanco";

// Criar conexão

$link = new mysql($servername, $username, $password, $database);

/* check connection */
if(mysql_connect_errno()){
    printf("Conncet failed: %s\n" + mysql_connect_error());
    exit();
}

?>