<?php
	$nome = $_POST["nome"];
	$senha = $_POST["senha"];
	$email = $_POST["email"];
	$endereco = $_POST["endereco"];
	$tipo_sanguineo = $_POST["sangue"];
	$nascimento = $_POST["Nascimento"];
	$tipoUs = $_POST["tipoUs"];
    var_dump($_POST);
	try{
	$conexao = new PDO('mysql:host=localhost;dbname=DOAMAIS', 'root', '@luno1fpe');
	$stmt= $conexao->prepare("insert into usuario(nome,senha,email,endereco,tipo_sanguineo,tipo_usuario) values(?,?,?,?,?,?)");
		$stmt->bindValue(1, $nome);
	    $stmt->bindValue(2, $senha);
	    $stmt->bindValue(3, $email);
	    $stmt->bindValue(4, $endereco);
	    $stmt->bindValue(5, $tipo_sanguineo);
	    $stmt->bindValue(6, $tipoUs);
		$stmt->execute();
	}catch(PDOException $e){
	 echo $e->getMessage();
	}
?>

<meta http-equiv="refresh" content=1;url="../_telas/login.html">