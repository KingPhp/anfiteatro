<?php
	session_start();
	require_once '../app/config/conexao.php';
  $conect = new conection();

	switch ($_GET['cod']) {
		case 'admin':

		require_once '../app/admin/admin.model.php';
		require_once '../app/admin/adminService.php';
		$adm = new admin();

		//RECEBE DADOS DO FORMULARIO
		$email = $_POST['email'];

		$adm->__set('email',$email)->__set('senha',$_POST['senha']);

		$adminService = new adminService($conect,$adm);
		$num = $adminService->verifica();

		if($num>0){
			echo 'existe';
		}else{
			$_SESSION['msg'] = true;
			header('Location: index.php');
		}


			break;
		default:
			ECHO 'Error: NOT FOUND';
			break;
	}

?>
