<?php
session_start();
if (isset($_SESSION['nome']))
	header("location: ./dashboardusu/LobDeuser.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />


	<link id="favicon" rel="shortcut icon" type="image/png" href="../assets/img/Programar Software - 2019.png">

	<title>SGP - Sistema de Gerenciamento de Permutas</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.css" />
	<link rel="stylesheet" href="../assets/css/index.css" />

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</head>

<body>

	<div class="container-fluid">
		<section class="form-section">
			<img src="../assets/img/logosvgbranco.svg" width="160">


			<form action="../control/login.php" method="POST" class="needs-validation" enctype="application/x-www-form-urlencoded" novalidate>
				<div class="form">
				
				<div style="margin: 1rem;" class="col-lg-15 mb-10">
						<label for="validationCustom01">Email</label> <input type="email" class="texto form-control " id="email" placeholder="Email" required name="email">
						<div class="valid-feedback">Tudo certo!</div>
						<div class="invalid-feedback">Email Invalido!</div>
					</div>

					<div style="margin: 1rem;" class="col-lg-15 mb-10">
						<label for="validationCustom02">Senha</label> <input type="password" class="texto2 form-control " id="validationCustom02" placeholder="Senha" required name="senha">

						<div class="invalid-feedback">Inserir Senha!</div>
					</div>
				</div>
				<div style="text-align: center; ">
					<button class="btn btn-success movebutton" onclick="validar()" type="submit">Login</button>
				</div>

				<div style="text-align: center;">
					<a>Ainda não tem conta? <a href="cadastroUsuario.php" style="color: green;">Cadastre-se</a></a>
				</div>
			</form>
		</section>
	</div>




	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="../assets/js/script.js"></script>


	<script>
		(function validar() {
			'use strict';
			window.addEventListener('load', function() {
				var forms = document.getElementsByClassName('needs-validation');
				var validation = Array.prototype.filter.call(forms, function(form) {
					form.addEventListener('submit', function(event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();
	</script>

	<?php
	if (isset($_SESSION['msg']['erroLogin'])) {
		echo $_SESSION['msg']['erroLogin'];
		unset($_SESSION['msg']['erroLogin']);
	} else if (isset($_SESSION['msg']['usuCadSuccess'])) {
		echo $_SESSION['msg']['usuCadSuccess'];
		unset($_SESSION['msg']['usuCadSuccess']);
	}
	?>

</body>

</html>