<?php

    $servername     = "localhost";
    $username       = "root";
    $password       = "root";
    $database       = "farmacia";

    $conexao = mysqli_connect($servername,$username,$password,$database);
    mysqli_set_charset($conexao,"utf8");

?>
