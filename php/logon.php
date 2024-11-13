<?php
//recebendo os dados da tela de login

$email = $_POST['email'];
$password = $_POST['password'];

//link da conexão
include 'conexao.php';

//pegar os dados do banco 

$sql = "SELECT * FROM tb_user WHERE email = '$email'";

$query = $conexao ->query($sql);

$resultado = $query->fetch_assoc();


$email_banco = $resultado['email'];
$senha_banco = $resultado['senha'];

if($email == null && $password == null){
   echo  "<script> alert('Usuário ou senha inválida'); window.location = '../index.html' </script>";
}
else {
    if($email == $email_banco && $password == $senha_banco){
       // session_start();
        // $_SESSION['id'] = $resultado['id_usuario'];
        header('location: ../tela_inicial.php');
    } else{
        echo "<script> alert('Usuário ou senha inválida'); history.back(); </script>";
    }
}


//codigo certo

?>