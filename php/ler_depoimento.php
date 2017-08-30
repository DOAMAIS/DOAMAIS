<?php
include('../_telas/conexao.php');
session_start();
	$depoimento = $_POST["depoimento"];
	
  

	try{
	
	$stmt= $conexao->prepare("insert into depoimento (depoimento,id_usuario) values(?,?)");
		$stmt->bindValue(1, $depoimento);
    $stmt->bindValue(2, $_SESSION['usuario']);
        $stmt->execute();
	}catch(PDOException $e){
	 echo $e->getMessage();
	}
?> 
<meta http-equiv="refresh" content=4;url="../_telas/index.php">
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../_css/estilo.css">
  <style type="text/css">
    body{
      background: url(../../green-gradient-wallpaper-1.jpg);
    }
  </style>
 </head>
 <body>
 <div class="col-sm-6 col-md-6">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button>
               <span class="glyphicon glyphicon-ok"></span> <strong>Depoimento enviado com sucesso!</strong>
                <hr class="message-inner-separator">
                <p>
                   Espere a aprovação de um administrador</p>
            </div>
        </div>
 </body>
 </html>