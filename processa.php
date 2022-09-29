<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "cadastros";

    $saymyname = $_POST['nome'];
    $emailform = $_POST['email'];
    $senhaform = md5($_POST['senha']);

    $connect = new mysqli($servidor, $usuario, $senha, $banco);

    if ($connect -> connect_error) {
        die("Falha na conexão: ". $connect -> connect_error);
    } else {
        echo "Conectado";
    }

    $query = "INSERT INTO usuario (nome, email, senha) VALUES ('$saymyname', '$emailform', '$senhaform')";
    $connect -> query($query);

    $connect -> close();
    
?>

<script>
    window.location.href = "./";
</script>