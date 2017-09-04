<?php	
session_start();
try{
	$conexao = new PDO('mysql:host=localhost;dbname=DOAMAIS', 'root', '@luno1fpe');
	$conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$stmt= $conexao->prepare("select * from usuario where id=?");
      $stmt->bindValue(1, $_SESSION["usuario"]);
      $stmt->execute();
      	foreach ($stmt as $linha) {
      		$foto_antiga = $linha['foto'];
      	}
}catch(PDOException $e){
	 echo $e->getMessage();
	}
?>