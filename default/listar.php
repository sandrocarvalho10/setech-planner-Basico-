<?php
session_start();
	include('verifica_login.php');
include('conexao.php');
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

<?php   include('./parts/navbar.php'); 
//	<!-- APP ASIDE ==========-->
        include('./parts/navbar-aside.php');
//	<!--========== END app aside -->
//	<!-- navbar search -->
        include('./parts/navbar-search.php');
//	<!-- .navbar-search -->
	?>


	<!-- APP MAIN ==========-->
	<!-- APP MAIN ==========-->
	<main id="app-main" class="app-main">
		<div class="wrap">
			<section class="app-content">
				<div class="row">
					<!-- DOM dataTable -->
					<div class="col-md-12">
						<div class="widget">
							<header class="widget-header">
								<h4 class="widget-title">Todas Tarefas</h4>
							</header><!-- .widget-header -->
							<hr class="widget-separator">
							<div class="widget-body">
								<div class="table-responsive">
									<table id="default-datatable" data-plugin="DataTable" class="table table-striped" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>Número</th>
												<th>Nome</th>
												<th>Descricao</th>
												<th>Data Criação</th>
												<th>Data Entrega</th>
												<th>Status</th>
												<th>Editar</th>
												<th>Remover</th>
												
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>Número</th>
												<th>Nome</th>
												<th>Descricao</th>
												<th>Data Criação</th>
												<th>Data Entrega</th>
												<th>Status</th>
												<th>Editar</th>
												<th>Remover</th>
											</tr>
										</tfoot>
										<tbody>
											<?php 
											$sql = "SELECT * FROM `tbl_tarefas`";
	
											$result = $conexao->query($sql);

											if(mysqli_num_rows($result) > 0){
												while($row = mysqli_fetch_assoc($result)){
													$status = $row['status'];
												switch ($status){
													case 1 :
														$status = 'Urgente';
														break;
													case 2 :
														$status = 'Média';
														break;
													case 3 :
														$status = 'Baixa';
														break;
													case 4 :
														$status = 'Concluída';
														break;
													default:
														$status = 'Não especificado';
														break;
												}
													
												echo '<tr>
														<td>'.$row['id'].'</td>
														<td>'.$row['nome'].'</td>
														<td>'.$row['descricao'].'</td>
														<td>'.date('d/m/y',strtotime($row['data_criacao'])).'</td>
														<td>'.date('d/m/y',strtotime($row['data_final'])).'</td>
														<td>'.$status.'</td>
														<td style="text-align: center;"><a href="#"><span><i class="fa fa-edit"></i></span></a></td>
														<td style="text-align: center;"><a href="#"><span><i class="fa fa-trash"></i></span></a></td>
													</tr>';
													
												}
											}else{
												echo 'Resultados:  0';
											}
											?>
											
										</tbody>
									</table>
								</div>
							</div><!-- .widget-body -->
						</div><!-- .widget -->
					</div><!-- END column -->
				</div>
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


