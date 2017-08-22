<?php
     $db = new PDO('mysql:host=localhost; dbname=DOAMAIS', 'root', '@luno1fpe');
 } catch (PDOException  $e) {
    print $e->getMessage();
 }
  $tipo_sanguineo=$_POST["doador"];


  if(isset($doador))
  {
	$stmt = $con->prepare("select nome, email, tipo_sanguineo from usuario where .$tipo_sanguineo.=?");
	$stmt->bindValue(1, '%'.$tipo_sanguineo.'%', PDO::PARAM_STR);
	$stmt->execute();
	$resultados = $stmt->rowCount();

  if($resultados>=1){



?>