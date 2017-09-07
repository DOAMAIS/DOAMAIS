<?php 
	include('../_telas/conexao.php');

	session_start();
	$senha = $_POST["senha"];
	$email = $_POST["email"];
    //var_dump($_POST);
	try{
	
	$stmt= $conexao->prepare("select * from usuario where email=?");
	    $stmt->bindValue(1, $email);
		$stmt->execute();
		$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
		   if(count($resultado) >0){
			   	foreach($resultado as $linha){
					$_SESSION['senha'] = $linha['senha'];
					$_SESSION['usuario'] = $linha['id'];
				}
				  if(password_verify($senha,$_SESSION['senha'])){
				  	header('Location: ../_telas/index.php');
				  }else{
			   	    header('Location: ../_telas/login.php?msg=true');
			   }
		   }else{
		   	  header('Location: ../_telas/login.php?msg=true');
		   }
		   
	}catch(PDOException $e){
	 echo $e->getMessage();
	}
?>
