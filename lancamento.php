<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>

    <body>

        <div class="container text-center">
          <div class="row">
            <div class="col-sm12 col-md-5 ">
            <img class="img_cad" src="img/5928126_3009236.svg" alt="">
            </div>
            <div class="col-sm12 col-md-5">
              <i class="fa-solid fa-money-bill"></i>  
                <form>
                    <h1 id="cad_user">LANÇAMENTO</h1>
                    <div class="mb-3">
                      <label for="nome" class="form-label">Nome</label>
                      <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="categoria" class="form-label">Categoria</label>
                      <input type="number" min="0" max="1" class="form-control" id="categoria" name="categoria" aria-describedby="emailHelp">
                    </div>
                    <a style="margin-left: 10% ;" class="btn btn-primary" href="tela_inicial.php" role="button">voltar</a>
                    <a href="#" type="button" class="btn btn-primary">cadastrar</a>
                  </form>
             </div>
        </div>
          </div>
        </div>
        
    
        
        
        
        
        
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        </body>
        </html>