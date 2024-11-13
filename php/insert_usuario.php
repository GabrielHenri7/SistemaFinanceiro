<?php
    include 'conexao.php';

    $nome = $_GET['Nome'];
    $email = $_POST['Email'];
    $cargo = $_POST['Cargo'];
    $senha = $_POST['Senha'];

    $sql = "INSERT INTO tb_user VALUES (null, '$nome', '$email', '$cargo', '$senha')";

    

    if ($conexao ->query($sql))
    {
        echo "<script>alert('Inserido com Sucesso!'); window.location.href = '../index.html';</script>";
    }

    else
    {
        echo "Falha na conexão com o banco de dados"; 
    }

?>