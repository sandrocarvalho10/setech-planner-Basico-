<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>SETECH Planner</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Admin, Dashboard, Bootstrap" />
	<link rel="shortcut icon" sizes="196x196" href="../assets/images/LogoSandro_SETECH_azul.png">

	<link rel="stylesheet" href="../libs/bower/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="../libs/bower/animate.css/animate.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/css/core.css">
	<link rel="stylesheet" href="../assets/css/misc-pages.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
</head>

<body class="simple-page">
	<div id="back-to-home">
		<a href="./../index.php" class="btn btn-outline btn-default"><i class="fa fa-home animated zoomIn"></i></a>
	</div>
	<div class="simple-page-wrap">
		<div class="simple-page-logo animated swing">
			<a href="./../index.php">
				<span class="brand-icon"><img src="setech.png" style="max-width: 100px; height: auto;"></span>
				<span> Planner</span>
			</a>
		</div><!-- logo -->

		<div class="simple-page-form animated flipInY" id="signup-form">
			<h4 class="form-title m-b-xl text-center">Registre-se para uma nova conta</h4>
<!--            ALERTA ERRO-->
		  <?php 
			if(isset($_SESSION['existe'])):
			?>
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Erro </strong>
				<span>Email já cadastrado</span>
			</div>
			<?php 	
			endif;
			unset($_SESSION['existe']);
			?>
			<form action="./signup.php" method="POST">
				<div class="form-group">
					<input id="sign-up-name" type="text" class="form-control" name="nome" placeholder="Name">
				</div>
				<div class="form-group">
					<input id="sign-up-cpf" type="text" class="form-control" name="cpf" placeholder="CPF">
				</div>

				<div class="form-group">
					<input id="sign-up-email" type="email" class="form-control" name="email" placeholder="Email">
				</div>

				<div class="form-group">
					<input id="sign-up-password" type="password" class="form-control" name="pass" placeholder="Password">
				</div>

				<div class="form-group m-b-xl">
					<div class="checkbox checkbox-primary">
						<input type="checkbox" id="keep_me_logged_in" />
						<label for="keep_me_logged_in">Mantenha-me conectado</label>
					</div>
				</div>
				<input type="submit" class="btn btn-primary" value="CADASTRAR">
			</form>
		</div><!-- #login-form -->

		<div class="simple-page-footer">
			<p>
				<small>Já possui uma conta ?</small>
				<a href="./login_ui.php">Acessar</a>
			</p>
		</div><!-- .simple-page-footer -->


	</div><!-- .simple-page-wrap -->
</body>

</html>

