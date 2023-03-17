<?php

require_once('../conexao/db.php');

session_start();

$nome = $_POST['usuario'];
$senha = md5(addslashes($_POST['senha']));

$sql = "SELECT * FROM usuario WHERE nome = '{$nome}' AND senha = '{$senha}'";

$enviar = $conn->query($sql);

if(mysqli_num_rows($enviar) > 0){
    $_SESSION['usuario'] = $nome;
    $_SESSION['senha'] = $senha;
    header('location: ../site.php');
}
else{
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    print"<script> alert('Nenhum usuario encontrado')</script>";
    print"<script>location.href='index.php'; </script>";
}