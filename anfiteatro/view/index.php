<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="./css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/style.css">
		<script src="./js/jquery-3.3.1.js"></script>
		<title>Sistema anfiteatro</title>

	</head>
	<body>



		<div id="form" class="container mt-5 col-md-4 bg-white">

			<div class="container p-4 mb-0">
				<h1 id="log" class="text-center text-dark">lOGIN</h1>
				<hr>
			</div>

			<?php if( isset($_SESSION['msg']) && $_SESSION['msg']==true): ?>
			<div id="alerta" class="container p-0 col-md-12">

				<div class="alert alert-danger p-0 col-md-12" role="alert">
							<p class="text-center mt-3"> <b>Alerta!!!</b> desculpe mas este usuario não existe tente novamente </p>
				</div>

			</div>
			<?php  unset($_SESSION['msg']); endif; ?>

			<div class="container p-5">
				<form action="controller.php?cod=admin" method="post">

				<div class="row">
					<label for="email"><b>E-mail</b></label>
					<input  id="email" class="form-control col-md-12" type="email" name="email" placeholder="email@dominio.com">
				</div>
				<div class="row pt-2">
					<label for="email"><b>Senha</b></label>
					<input id="senha" class="form-control col-md-12" type="password" name="senha" placeholder="**********">
				</div>

				<div class="row pt-3">
					<button id="bt" type="submit" class="btn btn-success">Entrar</button>
				</div>
				</form>
			</div>

		</div>

		<script>
		$(document).ready(function() {
				$('#bt').click(function(){
				var email = $('#email').val();
				var senha = $('#senha').val();
					if(email=='' || senha==''){

						return false;
					}
				});
		});
		</script>
	</body>
</html>
