<?php
     session_start();
      $conexao = new PDO('mysql:host=localhost;dbname=DOAMAIS', 'root', '@luno1fpe');
      $stmt= $conexao->prepare("select * from usuario where id=?");
      $stmt->bindValue(1, $_SESSION["usuario"]);
      $stmt->execute();
      foreach ($stmt as $linha) {
         $nome = $linha["nome"];
         $depoimento = $linha["depoimento"];
         $foto_perfil = $linha["foto"];
         $tiposanguineo = $linha["tipo_sanguineo"];
        }
        $stmt= $conexao->prepare("select * from depoimento where id_usuario=? order by id desc limit 1");                                                                    
                                $stmt->bindValue(1, $_SESSION["usuario"]);
                                $stmt->execute();
                                foreach ($stmt as $linha) {
                                $depoimento = $linha["depoimento"];
                                }
?>

<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">

  <title>Página inicial</title>

  <meta name="generator" content="Bootply">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">  
  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <link href="css/styles.css" rel="stylesheet"> 
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>

</head>

<body>
 <style>
    #main {
      background-image: url("../green-gradient-wallpaper-1.jpg");
    }
    #nav_cor {
      background-color: #277554;
    }
    #botao {
      background-color: #277554;
      width: 90px;
      color: white;
    }
    #sidebar {
      background-color: #277554;
    }
    #imagem_logo{
      width: 50px;
      height: auto;
      margin-top: 6px;
      margin-left: 6px;
      text-align: left;
    }  
    
    .profile-header-container{
      margin: 0 auto;
      text-align: center;
    }
    .profile-header-img {
      padding: 54px;
    }
    .profile-header-img > img.img-circle {
      width: 120px;
      height: 120px;
      border: 2px solid #51D2B7;
    }
    .profile-header {
      margin-top: 43px;
    }
    .rank-label-container {
      margin-top: -19px;
      text-align: center;
    }
    .label.label-default.rank-label {
      background-color: rgb(81, 210, 183);
      padding: 5px 10px 5px 10px;
      border-radius: 27px;
    }
  </style>

  <!-- grid da página inteira -->
  <div class="column col-sm-12 col-xs-11" id="main">

  <!-- barra de navegação -->
  <div class="navbar navbar navbar-static-top" id="nav_cor">
    <div class="navbar-header" id="nav_cor">
      <img src="pica.png" id="imagem_logo">
    </div>  
    <ul class="nav navbar-nav">
      <li>
        <a href="index.php"> Página Inicial</a>
      </li>
    </ul>
      
    <ul class="nav navbar-nav navbar">
      <li class="dropdown">
        <a href="consulta_doador.php"> Consultar doador </a>  
      </li>
    </ul>       
  </div>
  <!-- /barra de navegação -->

  <!-- main coluna esquerda -->    
  <div class="container">
    <div class="padding">
      <div class="full col-sm-9">

        <!-- coluna esquerda consultar -->
        <div class="col-sm-5 col-md-6">
          <div class="panel panel-default">     
            <div class="panel-body">
              <div class="profile-header-img">
                <div class="rank-label-container">  <!-- não consigo tirar essa tag sem quebrar a página *pesquisar sobre* -->
                <form action="consulta_doador.php" method="GET">
                  <select name="tipo_sanguineo" class="form-control">
                    <option value="">Selecione o tipo sanguíneo que deseja pesquisar</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                  </select> <br> <br>
                <button type="submit" class="btn" id="botao">Enviar</button> </form>              
              </div>
            </div>
          </div> 
        </div>
        <!-- /coluna esquerda consultar -->            
                 
        <!-- coluna esquerda criar depoimento -->
        <div class="well">
          <form class="form-horizontal" action="../php/ler_depoimento.php" method="POST">
            <h4>Depoimento</h4>
              <div class="form-group" style="padding:14px; height:200px"> 
                <textarea name="depoimento" class="form-control" placeholder="Escreva aqui seu depoimento..." style="height:180px"></textarea> </div>
                <button id="botao" class="btn">Enviar</button>
              </div>  
            </form>
        </div>
        <!-- /coluna esquerda criar depoimento -->            

        <!-- main coluna direita -->
        <div class="col-sm-7 col-md-6">

          <!-- coluna direita ver depoimento recente -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="profile-header-container">
              
            <h4>Seu depoimento</h4>
          </div>      
</div>
                  <div class="panel-body">
                    <div class="pull-right">
                      <img class="img-circle" src="/_telas/photos/<?php echo $foto_perfil; ?>" />
                              <!-- badge -->
                              <div class="rank-label-container">
                                <span class="label label-default rank-label">Tipo: <?php echo $tiposanguineo;?> </span>

                              </div>
            </div>
          
                       
                               
                        <h3> <?php
                                echo $nome;
                            ?></h3>
                        
                      <hr> <?php
                              if($depoimento!=null)
                                echo $depoimento;
                              else
                                echo "Sem depoimento";

                            ?>
                      </div>
                      <br> 

                            
                    </div>
            <!-- /coluna direita ver depoimento recente -->

                      <div class="panel panel-default">
                      <div class="panel-heading">
                      <h4>Depoimentos &amp; Histórias</h4>
                      </div>
                      <div class="panel-body">
                      <p>
                        <img src="../logoifpe200.png" class="img-circle pull-right"> </p>
                      <h3 style="text-align: justify;">Arroz da Silva</h3>
                      <hr> Nasci em Recife e preciso de sangue!!</div>
                  </div>
                </div>
                <!--/row-->
                <hr>
                <hr> </div>
            </div>
          </div>
        </div>
        <!-- /main coluna direita -->
      </div>
      <!-- /col-9 -->
    </div>
    <!-- /padding -->
  </div>
  <!-- /grid da página inteira -->
</body>

</html>