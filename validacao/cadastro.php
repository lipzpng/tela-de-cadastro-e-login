<?php

require_once('../conexao/db.php');

$nome = $_POST['usuario'];
$email = $_POST['email'];
$senha = md5(addslashes($_POST['senha']));
$confirmar_senha = md5(addslashes($_POST['confirmar_senha']));


if($senha == $confirmar_senha){
    $sql = "INSERT usuario (nome,email,senha,confirmar_senha) VALUES  
    ('{$nome}', '{$email}','{$senha}','{$confirmar_senha}')";
    $enviar = $conn ->query($sql);

    if($enviar == true){
        print"<script>alert('Usuario Cadastrado com sucesso')</script>";
        print"<script> location.href='../cadastrar.php'</script>";
    }
}
else{
    // print"<script>alert('as senhas nao são iguas')</script>";
    // print"<script> location.href='../cadastrar.php'</script>";
}
