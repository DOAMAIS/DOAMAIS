<html>
<?php
     session_start();
     if(!isset($_SESSION['usuario'])){
         header('Location: login.php');
     }
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../_css/estilo.css">
  <title>Alterar dados</title>

    <style>
    select {
      color: grey;
    }
    .radio{
      color: #808080; 
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
    #menu {
      background-color: #277554;
    }
    #botao {
      background-color: #277554;
      width: 200px;
      color: white;
    }
    .imagem {
      margin-bottom: 10px;
    }
    .fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
    }
    .fileUpload input.upload {
    
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
    }
  </style>

<script type="text/javascript">
  function verificaSenha(){
        var confSenha = document.getElementById("confSenha");

        if(senha.value!=confSenha.value){
          alert("As senhas não combinam");
          confSenha.focus();
          return false;
        }if (verifySenha()==false) {
        alert("A senha deve conter no mínimo 5 caracteres!");
        }return verifySenha();
     }

function letras(){
  tecla = event.keyCode;
  if (tecla >= 33 && tecla <= 64 || tecla >= 91 && tecla <= 93 || tecla >= 123 && tecla <= 159 || tecla >= 162 && tecla <= 191 ){ 
      return false;
  }else{
     return true;
  }
}

  function verifySenha(){
      a = document.getElementById("senha");
      b = document.getElementById("senha0");
      if(a.value.length < 4){
        b.style.color = "red";
        b.innerHTML = "A senha deve ter no mínimo 5 caracteres";
        return false;
      }else{       
        b.innerHTML = "";
        return true;
      }
  }
</script>
  <?php 

      session_start();
      include 'conexao.php';
      $stmt = $conexao->prepare("select * from usuario where id = ?");
      $stmt->bindValue(1, $_SESSION['usuario']);
      $stmt->execute();
        foreach ($stmt as $linha){
            $nome = $linha['nome'];
            $email = $linha['email'];
            $senha;
            $tipo_sanguineo = $linha["tipo_sanguineo"];
            $tipoUs = $linha["tipo_usuario"];
            $foto_perfil = $linha['foto'];
        }
     function select($a,$b){
        if($a==$b){
          echo "selected";
        }
      }
     function check($a,$b){
       if($a==$b){
         echo "checked";
      }
     }
  if($_SESSION['usuario'] == null){
     header('Location: inicial.php');
  }

   ?>
</head>
<body>
  <nav class="navbar navbar-expand-md text-center fixed-top  w-100 p-1 navbar-inverse text-uppercase" id="menu">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Página Inicial<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="consulta_doador.php">Consultar doador</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="altera_senha.php">Alterar senha</a>
          </li>
        </ul>
     <ul class="nav navbar-nav navbar pull-right" style="top: -10px;">
      <li class="dropdown">
        <a href="logout.php"><button class="btn btn-success">Sair</button></a>
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
      <div class="row">
        <div class="col-md-12">
       <form action="update_cadastro.php" method="POST" enctype="multipart/form-data" onsubmit="return verificaSenha();">
          <div id="card">
            <div class="imagem">
              <img src="../_telas/photos/<?php echo $foto_perfil; ?>" class="rounded-circle img-fluid mx-auto d-block"> </div>
            <div class="form-campos"> <label class="w-100 text-left m-1"></label>
            <div class="fileUpload btn" style="background-color:#277554; color: white; width: 220px;">
               <span>Escolha sua foto</span>
               <input type="file" class="upload" id="foto" name="arquivo" placeholder="Escolha sua foto" accept="image/*">
            </div>
              <input type="text" class="form-control" placeholder="Nome" name="nome" value="<?php echo $nome; ?>" onkeypress="return letras();" required> </div>
            <div class="form-campos"> <label class="text-left w-100 m-1" ></label>
              <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>" required> </div>
           <label class="w-100 text-left m-1"></label>
            <div class="form-tipo"> <label class="w-100 text-left m-1"></label>
           <select name="sangue" required>
              <option value="">Selecione seu tipo sanguíneo</option>
              <option value="A+" <?php select($tipo_sanguineo,"A+"); ?>>A+</option>
              <option value="A-" <?php select($tipo_sanguineo,"A-"); ?>>A-</option>
              <option value="B+" <?php select($tipo_sanguineo,"B+"); ?>>B+</option>
              <option value="B-" <?php select($tipo_sanguineo,"B-"); ?>>B-</option>
              <option value="AB+" <?php select($tipo_sanguineo,"AB+"); ?>>AB+</option>
              <option value="AB-" <?php select($tipo_sanguineo,"AB-"); ?>>AB-</option>
              <option value="O+" <?php select($tipo_sanguineo,"O+"); ?>>O+</option>
              <option value="O-" <?php select($tipo_sanguineo,"O-"); ?>>O-</option>
            </select><br/><label class="w-100 text-left m-1"></label>
              <input type="radio" value="D" id="D" name="tipoUs" <?php check($tipoUs,"D"); ?> required><label for="D" class="radio">Doador</label>
              &nbsp;
              <input type="radio" value="R" id="R" name="tipoUs" <?php check($tipoUs,"R"); ?> required><label for="R" class="radio">Receptor</label> </div> 
          
            <br>
            <br>
            <button type="submit" class="btn" id="botao">ALTERAR</button>
            <br>
          </form>
          </div>
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
