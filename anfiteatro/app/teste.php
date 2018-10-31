<?php

	require '../app/config/conexao.php';
	$conexao = new conection();


	//===================teste de listagem===================

	//RECEBE DADOS DO FORMULARIO
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$senha = $_POST['senha'];


	$query = "SELECT * FROM admin WHERE email = :email && senha = :senha";
	$stmt = $conexao->conect()->prepare($query);
	$stmt->bindValue(':email',$email);
	$stmt->bindValue(':senha',$senha);
	$stmt->execute();
	$c = $stmt->rowCount();


	if($c>0){
		echo 'tem usuario';
	}else{
		echo 'não tem usuario';
	}






?>
