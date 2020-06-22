<?php
	session_start();
	include('verifica_login.php');
	include('conexao.php');
//	include('./classes/TarefasCrud.php');

		
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
				<div class="m-b-xl">
					<h1 style="font-size: 48px;">Planner</h1>
					<h4>Painel de Exibição de Tarefas</h4>
				</div>
				<div class="m-b-lg nav-tabs-horizontal">
					<!-- tabs list -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#todastarefas" aria-controls="todastarefas" role="tab" data-toggle="tab">Tarefas</a></li>
						<li role="presentation"><a href="#tarefasimportantes" aria-controls="tarefasimportantes" role="tab" data-toggle="tab">Tarefas Importantes</a></li>
						<li role="presentation"><a href="#tarefaspendentes" aria-controls="tarefaspendentes" role="tab" data-toggle="tab">Terefas a serem Feitas</a></li>
						<li role="presentation"><a href="#tarefasconcluidas" aria-controls="tarefasconcluidas" role="tab" data-toggle="tab">Tarefas Concluídas</a></li>
					</ul><!-- .nav-tabs -->

					<!-- Tab panes -->
					<div class="tab-content p-md">
						<div role="tabpanel" class="tab-pane in active fade" id="todastarefas">
							<h3 class="m-b-lg">Tarefas</h3>
							<div class="row">
								<div class="col-sm-6 col-md-4">
									<div class="panel panel-primary">
										<div class="panel-heading">
											<h4 class="panel-title">Adicionar nova Tarefa</h4>
										</div>
										<div class="panel-body" style="">
											<a href="tarefa_nova.php">
												<p class="text-center">
													<span class="text-center h1">
														<i class="fa fa-plus"></i>
													</span>
												</p>

											</a>
										</div>
<!--
										<div class="panel-footer">
																						<p>22/02/2019</p>
										</div>
-->
									</div>
								</div><!-- END column -->
								<!--								-->
								<!--						==========		lista todas as tarefas ========================-->

								<?php
								$sql = "SELECT * FROM `tbl_tarefas`";
	
								$result = $conexao->query($sql);
	
		 						if(mysqli_num_rows($result) > 0){
		 							while($row = mysqli_fetch_assoc($result)){
										switch ($row['status']){
											case 0:
											case 1: 
												$status = 'panel-danger'; //Urgente
												break;
											case 2:
												$status = 'panel-warning'; //Media
												break;
											case 3: 
												$status = 'panel-purple'; //Baixa
												break;
											case 4: 
												$status = 'panel-success'; //Concluida
												break;
											default: 
												$status = 'panel-info';
										}
									echo '<div class="col-sm-6 col-md-4">
											<div class="panel '.$status.'">
												<div class="panel-heading">
												<h4 class="panel-title">'.$row['nome'].'</h4>
											</div>
											<div class="panel-body">'
										. $row['descricao'].
										'</div>
										<div class="panel-footer">
											<p> Data de Entrega: ' .$row['data_final']. '</p>
										</div>
									</div>
								</div><!-- END column -->';
									}
								}else{
			 						echo 'Resultados:  0';
									}								
								?>


							</div><!-- .row -->
						</div><!-- .tab-pane -->

						<div role="tabpanel" class="tab-pane fade" id="tarefasimportantes">
							<h3 class="m-b-lg">Tarefas</h3>
							<div class="row">

								<!--=========================================== TAREFAS URGENTES ==========================-->

								<?php
								$sql = "SELECT * FROM `tbl_tarefas` WHERE `status` = 1";
	
								$result = $conexao->query($sql);
	
		 						if(mysqli_num_rows($result) > 0){
		 							while($row = mysqli_fetch_assoc($result)){
										
									echo '<div class="col-sm-6 col-md-4">
											<div class="panel panel-danger panel-custom">
												<div class="panel-heading">
													<h4 class="panel-title">'.$row['nome'].'</h4>
												</div>
												<div class="panel-body">
													<p>'.$row['descricao'].'</p>							
												</div>
												<div class="panel-footer">
													<p>'.$row['data_final'].'</p>
												</div>
											</div>
										  </div><!-- END column -->';
									}
								}else{
			 						echo 'Resultados:  0';
									}

								
								?>

								<!--=========================================== TAREFAS A SEREM FEITAS ==========================-->


							</div><!-- .row -->
						</div><!-- .tab-pane -->

						<div role="tabpanel" class="tab-pane fade" id="tarefaspendentes">
							<h3 class="m-b-lg">Tarefas</h3>
							<div class="row">
								<?php
								$sql = "SELECT * FROM `tbl_tarefas` WHERE `status` = 1 or `status` = 2 or `status` = 3";
	
								$result = $conexao->query($sql);
								$row = mysqli_num_rows($result);
								$i = 0;
								$r = 0;
								$e = 0;
								$c = mysqli_num_rows($result);
								
		 						if(mysqli_num_rows($result) > 0){
									
		 							while($row = mysqli_fetch_assoc($result)){
										switch ($row['status']){
											case 0:
											case 1:
												$status = 'panel-danger';
												break;
											case 2:
												$status = 'panel-warning';
												break;
											case 3: 
												$status = 'panel-purple';
												break;
											default:
												$status = 'panel-info';
										}
										
										
											
										
									echo '
										<p class="contador" style="display:none" data-id="'.$c.'"></p>
									<div class="col-md-6">
									<div class="panel '.$status.'">
										<div class="panel-heading">
											<h4 class="panel-title">'.$row['nome'].'</h4>
										</div>
										<div class="panel-body">
										<p id="tarefa-id" style="display: none;">'.$row['id'].'</p>
											<p>'.$row['descricao'].'</p>
											<hr>
											<p>Data de Entrega: '.$row['data_final'].'</p>
										</div>
										<div class="panel-footer">
											<form action="./classes/TarefasCrud.php" method="post" style="display: inline">
											<button id="concluir'.$i++.'" name="concluir" value='.$row['id'].' data-id='.$row['id'].' class="btn btn-sm btn-success concluir"><span><i class="fa fa-check"></i></span> Concluir</button>
											</form>
											
											<form action="./classes/TarefasCrud.php" method="post" style="display: inline">											
											<button id="remover'.$r++.'" name="remover" value='.$row['id'].' data-id='.$row['id'].' class="btn btn-sm btn-danger"><span><i class="fa fa-trash"></i></span> Remover</button>
											</form>
												
											<form action="./edita_tarefa.php" method="post" style="display: inline">											
											<button id="editar'.$e++.'" name="editar" value='.$row['id'].' data-id='.$row['id'].' class="btn btn-sm btn-primary"><span><i class="fa fa-edit"></i></span> Editar</button>
											</form>
											
										</div>
									</div>
								</div><!-- END column -->';
											
									}
								}else{
			 						echo 'Resultados:  0';
									}

								
								?>
							</div><!-- .row -->
						</div><!-- .tab-pane -->
						<div role="tabpanel" class="tab-pane fade" id="tarefasconcluidas">
							<h3 class="m-b-lg">Tarefas</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="panel panel-success">
										<div class="panel-heading">
											<h4 class="panel-title">Concluidas</h4>
										</div>
										<table class="table">
											<tr>
												<th>Nome </th>
												<th>Descricao</th>
												<th>Data Entrega</th>
												<th>Concluída Em</th>
											</tr>
											<!--=========================================== TAREFAS CONCLUIDAS ==========================-->


											<?php
								$sql = "SELECT * FROM `tbl_tarefas` WHERE `status` = 4";
	
								$result = $conexao->query($sql);
	
		 						if(mysqli_num_rows($result) > 0){
		 							while($row = mysqli_fetch_assoc($result)){
										
									echo '<tr>
												<td>'.$row['nome'].'</td>
												<td>'.$row['descricao'].'</td>
												<td>'.$row['data_final'].'</td>
												<td>'.date('d/m/y').'</td>
										</tr>';
									}
								}else{
			 						echo 'Resultados:  0';
									}

								
								?>
										</table>
									</div>
								</div><!-- END column -->
							</div><!-- .row -->
						</div><!-- .tab-pane -->
					</div><!-- .tab-content -->
				</div><!-- .nav-tabs-horizontal -->
			</section><!-- .app-content -->
		</div><!-- .wrap -->
		<!-- APP FOOTER -->
		<?php include('./parts/footer.php'); ?>
		<!-- /#app-footer -->
	</main>
	<!--========== END app main -->

	<!-- APP CUSTOMIZER -->
	<?php include('./parts/menu-customizer.php')?>
	<!-- #app-customizer -->

	<!-- SIDE PANEL -->
	<?php include('./parts/side-panel-active.php'); ?>
	<!-- /#side-panel -->

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


	<script src="../assets/js/ajax.js"></script>


</body>

</html>
