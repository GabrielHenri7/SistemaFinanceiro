<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela inicialk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/tela_inicial.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>
<body>
    <div style="">
    <?php
       include 'php/conexao.php';
       session_start();
       if (isset($_SESSION['id'])) {
           $id = $_SESSION['id'];
           $sql = "SELECT * FROM tb_user WHERE id_usuario = $id";
           $query = $conexao ->query($sql);
           $resultado = $query->fetch_assoc();
           echo $resultado['nome']."!";
           
       }else {
        echo "<script> alert('Você não está logado!'); history.back(); </script>";
       }
    ?>
    </div>
    <div class="container text-center">
        <h1>BEM VINDO A EMPRESA DO BIEL!!</h1><br>
        <p>Aqui você pode cadastrar uma categoria e realizar um lançamento</p>
        <a class="btn btn-primary" href="categoria.php" role="button">Categoria</a><br>
        <a class="btn btn-primary" href="lancamento.php" role="button">Lançamento</a><br>
    </div>
</body>
</html>