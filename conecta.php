<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "cadastros";

    $connect = new mysqli($servidor, $usuario, $senha, $banco);

    if ($connect -> connect_error) {
        die("Falha na conexão: ". $connect -> connect_error);
    }

?>