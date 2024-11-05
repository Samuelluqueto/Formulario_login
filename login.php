<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    include "conexao.php";

    $sql = "SELECT * FROM funcionarios 
    WHERE usuario = '$usuario' 
    AND senha = '$senha'";

    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo "Liberado!";
        header('location: inicio.html');
    } else {
        echo "<br>Usuário ou Senha inválidos<br>";
        echo "<a href='index2.html'>Voltar</a>";
    }
}
?>
