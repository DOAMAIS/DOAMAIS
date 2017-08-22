<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">

  <title>Pesquisar doador</title>

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
  </div>
  <!-- /barra de navegação -->
  <!-- conteudo -->
    <div class="container">
     <div class="panel panel-default"> 
        <div class="panel-heading">
          <h1>Pesquise aqui um doador</h1>
           <form action="result_doador.php" method="POS">       
          <div class="panel-body">
            <select name="sangue">
              <option value="null">Procurar pelo tipo sanguíneo:</option>
              <option>A+</option>
              <option>A-</option>
              <option>B+</option>
              <option>B-</option>
              <option>AB+</option>
              <option>AB-</option>
              <option>O+</option>
              <option>O-</option>
            </select><br><br>
            <button>Pesquisar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /grid da página inteira -->
  </div>
</body>
</html>