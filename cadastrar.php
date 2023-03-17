<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Cadastro de usuario</title>
    <script src="js/script.js"></script>

  </head>

<body>
<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Cadastre-se Agora</h3>
              
            </div>
            <form action="validacao/cadastro.php" method="post" onsubmit="return validarCadastro()">
              <div class="form-group first">
                <label for="username">Usuario</label>
                <input type="text" class="form-control" name="usuario" id="username" >
              </div>
              <div class="form-group ">
                <label for="username">Email</label>
                <input type="text" class="form-control" name="email" id="email" >
              </div>
              <div class="form-group ">
                <label for="username">Senha</label>
                <input type="password" class="form-control" name="senha" id="password" >
                
              </div>
              <div  id="erroSenhaFraca">
              </div>
              <!-- <div class="form-group" id="ifnSenha"></div> -->
             
              <div class="form-group last mb-4">
                <label for="password">Confirmar senha</label>
                <input type="password" class="form-control" name="confirmar_senha" id="confpassword" >
              </div>
              <div  id="erroConfirmarSenha">
              
              

              <input type="submit" value="Criar conta" class="btn btn-block btn-primary">

              <div class="align-items-center">
                <!-- <label class="control control--checkbox mb-0"><span class="caption">Lembrar de mim</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div> -->
                </label>
                <span class="ml-auto"><a href="index.php" class="forgot-pass">Voltar a tela de login</a></span> 
              </div>

              <span class="d-block text-left my-4 text-muted">&mdash; Ou entre com suas redes sociais &mdash;</span>
              
              
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>