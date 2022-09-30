<?php
    include 'conecta.php';

    $saymyname = $_POST['nome'];
    $emailform = $_POST['email'];
    $senhaform = md5($_POST['password']);

    $query = "INSERT INTO usuario (nome, email, senha) VALUES ('$saymyname', '$emailform', '$senhaform');";
    $connect -> query($query);

    $connect -> close();
    
?>

<script>
    alert("Cadastrado com sucesso!");
    window.location.href = "./";
</script>