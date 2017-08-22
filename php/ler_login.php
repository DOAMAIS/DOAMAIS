<?php

    session_start();
	$senha = $_POST["senha"];
	$email = $_POST["email"];
    //var_dump($_POST);

	try{
	$conexao = new PDO('mysql:host=localhost;dbname=DOAMAIS', 'root', '@luno1fpe');
	$stmt= $conexao->prepare("select * from usuario where email=? and senha=?");
	    $stmt->bindValue(1, $email);
	    $stmt->bindValue(2, $senha);
		$stmt->execute();
		$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
			if(count($resultado) >0){
				foreach($resultado as $linha){
					$_SESSION['usuario'] = $linha['id'];
    			}
				header('Location: ../_telas/index.php');
			}else{
				$_SESSION['usuario'] = null;
				header('Location: ../_telas/login.php?msg=true');
			}
		
		
		
	}catch(PDOException $e){
	 echo $e->getMessage();
	}


?>
