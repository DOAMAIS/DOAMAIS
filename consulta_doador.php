

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
    <script src="ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script type="text/javascript">
      function mostra(){
        document.getElementsByTagname("table").style.display = "block";
      }
    </script>

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
      table{
        margin: 0 auto;
        display: ;
      }
      table,th,tr,td{
        border-radius: 10px;
        width: ;
        text-align: center;
        background-color: white;
      }
    </style>
  </head>
  <!-- grid da página inteira -->
  <div class="column col-sm-12 col-xs-11" id="main">

    <!-- barra de navegação -->
    <div class="navbar navbar navbar-static-top" id="nav_cor">
      <div class="navbar-header" id="nav_cor">
<span class="icon-bar "></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 

            <img src="pica.png" id="imagem_logo">
            </div>
            
              <ul class="nav navbar-nav">
                <li>
                  <a href="index.php"> Página Inicial</a>
                </li>
              </ul>
              
            </nav>
    </div>
    <!-- /barra de navegação -->
    <!-- conteudo da consulta-->
    <div class="container">
     <div class="panel panel-default"> 
        <div class="panel-heading">
          <h1 style="text-align: center;">Pesquise aqui um doador</h1>
           <form action="consulta_doador.php" method="GET">       
          <div class="panel-body">
            <select style="width: 250px;" name="tipo_sanguineo" id="tipo_sanguineo" class="form-control">
              <option value="null">Selecione o tipo sanguineo:</option>
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
            </select> <br>
            <button class="btn" id="botao">Pesquisar</button>      
           </form>
<br>
<br>

          <table class="table table-list-search" width="70%">
           <tr>
              <th>Nome</th>
              <th>Email</th>
            </tr>  
            <?php
               include 'conexao.php'; 
                $tipo_sanguineo= $_GET["tipo_sanguineo"];
                $stmt = $conexao->prepare("select nome,email from usuario where tipo_sanguineo=?");  
                             $stmt->bindValue(1,$tipo_sanguineo);
                              $stmt->execute();
                              $resultado = $stmt->fetchAll();
                             
                                    ?>
          
       
            <?php
               
              foreach($resultado as $linha){
            ?> 

          
                   <tr> 
                  
                      <td><?php echo $linha['nome']; ?></td>
                      <td><?php echo $linha['email']; ?></td>
                    

                    </tr>               
            <?php   }  ?>
          </table>
          <!-- /conteudo da consulta-->     
          </div>
        </div>
      </div>
    </div>
    <!-- /grid da página inteira -->
            
  </div>
</body>
</html>