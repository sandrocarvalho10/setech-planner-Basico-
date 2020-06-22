<?php
session_start();
	include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Admin, Dashboard, Bootstrap" />
	<link rel="shortcut icon" sizes="196x196" href="../assets/images/LogoSandro_SETECH_azul.png">
	<title>SETECH Planner</title>

	<link rel="stylesheet" href="../libs/bower/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.css">
	<!-- build:css ../assets/css/app.min.css -->
	<link rel="stylesheet" href="../libs/bower/animate.css/animate.min.css">
	<link rel="stylesheet" href="../libs/bower/fullcalendar/dist/fullcalendar.min.css">
	<link rel="stylesheet" href="../libs/bower/perfect-scrollbar/css/perfect-scrollbar.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/css/core.css">
	<link rel="stylesheet" href="../assets/css/app.css">
	<!-- endbuild -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
	<script src="../libs/bower/breakpoints.js/dist/breakpoints.min.js"></script>
	<script>
		Breakpoints();

	</script>
</head>

<body class="menubar-left menubar-unfold menubar-light theme-primary">
	<!--============= start main area -->

	<?php include('./parts/navbar.php'); 
//	<!-- APP ASIDE ==========-->
		  include('./parts/navbar-aside.php');
//	<!--========== END app aside -->

//	<!-- navbar search -->
			include('./parts/navbar-search.php');
//	<!-- .navbar-search -->
	?>


	<!-- APP MAIN ==========-->
	<main id="app-main" class="app-main">
		<div class="wrap">
			<section class="app-content">
				<div class="row">
					<div class="col-md-12">
						<div class="widget">
							<header class="widget-header">
								<h4 class="widget-title">Inserir nova tarefa</h4>
							</header><!-- .widget-header -->
							<hr class="widget-separator">
							<?php								
									if(isset($_SESSION['sucesso'])):
									
								?>
								<div id="alerta" class="alert alert-success alert-dismissible" role="alert">
									<strong>Sucesso </strong>
									<span>Sua tarefa foi adicionada <a href="#">Ver tarefas</a></span>
								</div>
<!--
								<script>								
										setTimeout(function(){
											document.getElementById("alerta").style.display = "block";
										},5000);
								
								</script>
-->
								<?php 
									endif;
									unset($_SESSION['sucesso']);
								?>
							<div class="widget-body">
								<form action="./classes/TarefasCrud.php?adicionar" method="post" class="form-horizontal">
									<div class="form-group">
										<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Nome da Tarefa</label>
										<div class="col-sm-5">
											<input class="form-control input-lg" type="text" name="nome" placeholder="Nome">
										</div>
									</div><!-- .form-group -->
									<div class="form-group">
										<label for="textarea1" class="col-sm-2 col-sm-offset-2 control-label">Descricao:</label>
										<div class="col-sm-5">
											<textarea class="form-control" id="textarea1" name="descricao" placeholder="Sua Descrição"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="textarea1" class="col-sm-2 col-sm-offset-2 control-label">Data Entrega</label>
										<div class="col-sm-5">
											<input type="date" id="datetimepicker5" name="data_final" class="form-control">
										</div><!-- .form-group -->

									</div>

									<div class="form-group">
										<label for="#" class="col-sm-2 col-sm-offset-2 control-label">Prioridade</label>
										<div class="col-sm-5">
											<select class="form-control input-lg" name="status">
												<option value="1">1 - Urgente</option>
												<option value="2">2 - Média</option>
												<option value="3">3 - Baixa</option>
												<option value="4">4 - Concluída</option>
											</select>
										</div>
									</div>
									<!-- .form-group -->
									<button type="submit" class="btn btn-primary col-sm-offset-8">Cadastrar</button>
								</form>
							</div><!-- .widget-body -->
						</div><!-- .widget -->
					</div><!-- END column -->

				</div><!-- .row -->

				<!-- END column -->

				<!-- APP FOOTER -->
				<?php include('./parts/footer.php'); ?>
				<!-- /#app-footer -->
			</section>
		</div>
	</main>
	<!--========== END app main -->

	<?php  include ('./parts/menu-customizer.php'); 
//	
//	<!-- SIDE PANEL -->
		include('./parts/side-panel-active.php');
//	<!-- /#side-panel -->
	?>
	

	<!-- build:js ../assets/js/core.min.js -->
	<script src="../libs/bower/jquery/dist/jquery.js"></script>
	<script src="../libs/bower/jquery-ui/jquery-ui.min.js"></script>
	<script src="../libs/bower/jQuery-Storage-API/jquery.storageapi.min.js"></script>
	<script src="../libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
	<script src="../libs/bower/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="../libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
	<script src="../libs/bower/PACE/pace.min.js"></script>
	<!-- endbuild -->

	<!-- build:js ../assets/js/app.min.js -->
	<script src="../assets/js/library.js"></script>
	<script src="../assets/js/plugins.js"></script>
	<script src="../assets/js/app.js"></script>
	<!-- endbuild -->
	<script src="../libs/bower/moment/moment.js"></script>
	<script src="../libs/bower/fullcalendar/dist/fullcalendar.min.js"></script>
	<script src="../assets/js/fullcalendar.js"></script>
<!--
	<script type="text/javascript">
		$(function() {
			$('#datetimepicker1').pickdate();
		});

	</script>
-->
</body>

</html>
