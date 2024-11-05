<?php
    $usuario = $_POST['nome'];
    $usuario = $_POST['data'];
    $usuario = $_POST['funcao'];
    $usuario = $_POST['salario'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    include "conexao.php";

    $sql = "INSERT INTO `funcionarios`(`nome`, `data_nasc`, `funcao`, `salario`, `usuario`, `senha`)
VALUES ('$nome', '$data_nasc', '$funcao', '$salario', '$usuario', '$senha')";

   if (mysqli_query($con, $sql)){
    echo "Você foi cadastrado com sucesso!";
    header('location: index2.html');
    } else {
    echo "Erro no cadastro!";
    }
