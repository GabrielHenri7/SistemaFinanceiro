<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATEGORIAs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>

</head>

<body>
<div class="container text-center">
  <div style="color: white">
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
    <a class="btn btn-outline-danger" href="logout.php" role="button">Sair</a>
  </div>

  <div class="row">
    <div class="col-sm12 col-md-5">
    <img class="img_cad" src="img/5928126_3009236.svg" alt="">
    </div>
    <div class="col-sm12 col-md-5">
      <i class="fa-solid fa-money-bill"></i>  
      <form action="php/insert_categoria.php" method="post">
        <h1 id="cad_user"> CATEGORIA</h1>
            
            <div class="mb-3">
              <label for="name" class="form-label">CATEGORIA</label>
              <input type="text" class="form-control" id="categoria" name="categoria" aria-describedby="emailHelp">
            </div>
            <h4 style="color: white; text-align: center;">TIPO</h4>
            <div class="mb-3">
              <input type="radio" class="type" id="tipo1" name="tipo" value="0" aria-describedby="emailHelp">
              <label for="tipo" class="form-label">Receita</label>
            </div>
            <div class="mb-3">
              <input type="radio" class="type" id="tipo2" name="tipo" value="1" aria-describedby="emailHelp">
              <label for="tipo" class="form-label">Despeza</label>
            </div>
            <div class="mb-3">
              <label for="descrição" class="form-label">Descrição</label>
              <input type="text" class="form-control" id="descricao" name="descricao" aria-describedby="emailHelp">
            </div>
            <a style="margin-left: 10% ;" class="btn btn-primary" href="tela_inicial.php" role="button">voltar</a>
            <input type="submit" class="btn btn-primary" value="Adicionar">
          </form>
    </div>
    
      
    </div>
  </div>
</div>