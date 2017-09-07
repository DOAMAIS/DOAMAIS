<?php
  include('conexao.php');
  session_start();
       if(!isset($_SESSION['usuario'])){
         header('Location: login.php');
     }
  $nome = preg_replace('/\s+/', ' ', $_POST['nome']);;
  //$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
  $email = $_POST["email"];
  $tipo_sanguineo = $_POST["sangue"];
  $tipoUs = $_POST["tipoUs"];
  //$foto = $_FILES["foto"]["tmp_name"];
  
  //var_dump($_FILES);
    //var_dump($_POST);
      define('DEST_DIR', __DIR__ . '/photos');  
        if($_FILES['foto']['name'] == null || $_FILES['foto']['name'] == "") {
              $foto = $foto_antiga;
            }    
          if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['name'])){
              $arquivo = $_FILES['arquivo'];
       if(!move_uploaded_file($arquivo['tmp_name'], DEST_DIR . '/' . $arquivo['name'])){
                $foto = $foto_antiga;
          } else {
                 $foto = $arquivo['name'];
          }
 }else $foto = $foto_antiga;
  try{
  $stmt= $conexao->prepare("update usuario set nome = ?,email = ?,tipo_sanguineo = ?,tipo_usuario = ?,foto = ? where id=?");
    $stmt->bindValue(1, $nome);
      $stmt->bindValue(2, $email);
      $stmt->bindValue(3, $tipo_sanguineo);
      $stmt->bindValue(4, $tipoUs);
      $stmt->bindValue(5, $foto);
      $stmt->bindValue(6, $_SESSION['usuario']);
    $stmt->execute();

  }catch(PDOException $e){
   echo $e->getMessage();
  }
?>

<html>

<head>
  <meta charset="utf-8">
  
  
  <meta http-equiv="refresh" content="2;URL='index.php'"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../_css/estilo.css"> 
  <title>ALTERA DADOS</title>
  </head>

<body>
  <style>
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
            <a class="nav-link" href="index.php">Página Inicial <span class="sr-only">(current)</span></a>
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
  <div class="text-center d-flex h-100 align-items-center" style="background-image: url(&quot;../green-gradient-wallpaper-1.jpg&quot;);">
    <div class="container">
      <div class="pull-center" >
         <div class="col-sm-6 col-md-4 col-md-6" style="margin: auto;">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button>
               <span class="glyphicon glyphicon-ok"></span> <strong>Mensagem:</strong>
                <hr class="message-inner-separator">
                <p>
                    Alteração efetuada com sucesso!</p>
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