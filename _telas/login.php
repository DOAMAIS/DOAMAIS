
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../_css/estilo.css"> 

  <title>Entrar</title>

</head>

<body>
  <style>
  body,html{
        background: url("../green-gradient-wallpaper-1.jpg") no-repeat center center fixed;
       -o-background-size: cover;
       -webkit-background-size: cover;
       -moz-background-size: cover;
       background-size: cover;
  }
  #card {
      max-width: 350px;
      padding: 40px 40px;
      background-color: #F7F7F7;
      padding: 20px 25px 30px;
      margin: 0 auto 25px;
      margin-top: 70px;
      -moz-border-radius: 2px;
      -webkit-border-radius: 2px;
      border-radius: 5px;
      -webkit-box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.3);
      box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
    }

    #botao {
      background-color: #277554;
      width: 200px;
      color: white;
    }

    #menu {
      background-color: #277554;
    } 
  }
    .imagem {
    margin-bottom: 10px;
  }
    .close{
        text-align: 10px;
  }
  </style>
  <nav class="navbar navbar-expand-md text-center fixed-top  w-100 p-1 navbar-inverse text-uppercase" id="menu">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="inicial.php">Página Inicial <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastro.php">Cadastre-se</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="quemsomos.php">Quem somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row"> </div>
  </div>
  <div class="text-center d-flex h-100 align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form action="../php/ler_login.php"  method="POST">
          <div id="card">
            <div class="imagem">
              <img src="../logoifpe200.png" class="rounded-circle img-fluid mx-auto d-block"> </div>
            <div class="form-campos"> <label class="text-left w-100 m-1"></label>
              <input type="email" class="form-control" name="email" placeholder="Email"> </div>
            <div class="form-campos"> <label class="w-100 text-left m-1"></label>
              <input type="password" class="form-control" name="senha" placeholder="Senha"> </div>
            <br>
            <div><h6><?php
                if(isset($_GET['msg'])){
                ?>
                    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <span><strong> Erro:</strong> Login ou senha inválidos </span>
    </div>
                <?php }

            ?></h6></div>
            <button type="submit" id="botao" class="btn">Entrar</button>
            <br>
            <br>
            <a href="cadastro.php">Clique aqui para se cadastrar</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
</body>

</html>
