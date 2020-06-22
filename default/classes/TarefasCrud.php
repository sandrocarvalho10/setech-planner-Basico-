<?php
include('./../conexao.php');
include('Tarefas.php');


if(isset($_GET['adicionar'])){
	$task = new Tarefa();
	$task->setNome($_POST['nome']);
	$task->setDescricao($_POST['descricao']);
	$task->setData_criacao('2019-09-30');
	$task->setDataFinal($_POST['data_final']);
	$task->setStatus($_POST['status']);
	
	Inserir($conexao,$task->getNome(), $task->getDescricao(), $task->getData_criacao(), $task->getDataFinal(),$task->getStatus());
	
}elseif(isset($_GET['editar'])){
	
	$upd = new Tarefa();
	$upd->setId($_POST['id']);
	$upd->setNome($_POST['nome']);
	$upd->setDescricao($_POST['descricao']);
	$upd->setDataFinal($_POST['data_final']);
	$upd->setStatus($_POST['status']);

	UpdateTarefa($conexao, $upd->getId(), $upd->getNome(), $upd->getDescricao(), $upd->getDataFinal(), $upd->getStatus());
}elseif(isset($_POST['concluir'])){
	
	$concluir = $_POST['concluir'];

	UpdateStatus($conexao,$concluir);
}elseif(isset($_POST['remover'])){
	
	$remover = $_POST['remover'];
	
	Delete($conexao, $remover);
	
}

	function Inserir($conexao, $nome, $descricao, $datacriacao, $datafinal, $status){
	
		$query = "INSERT INTO `tbl_tarefas`(`nome`, `descricao`, `data_criacao`, `data_final`, `status`) VALUES ('{$nome}','{$descricao}','{$datacriacao}','{$datafinal}','{$status}')";
		
		if($conexao->query($query) === true){
			$_SESSION['sucesso'] = true;
			echo "<script>	
			location.href='./../tarefa_nova.php';
			</script>";
//			header('Location : ./../tarefa_nova.php');			
			exit();
		}else{
			header('Location : ./../panels.php');

			 echo "Error: " . $query . "<br>" . $conexao->error;
			exit();
		}
		
	}


	function UpdateStatus($conexao,$id){
		$sql = "UPDATE `tbl_tarefas` SET `status` = 4 WHERE id = '{$id}'";
		
		if($conexao->query($sql) === true){
			echo "<script>	
			location.href='./../panels.php';
			</script>";
			exit();
		}else{
			echo "Error: ". $sql . "<br>" . $conexao->error;
			exit();
		}
	}

	function UpdateTarefa($conexao, $id, $nome, $descricao, $data_final, $status){
		$sql = "UPDATE `tbl_tarefas` SET `nome` = '{$nome}', `descricao` = '{$descricao}', `data_final` = '{$data_final}', `status` = '{$status}' WHERE id = '{$id}'";
		
		if($conexao->query($sql) === true){
			echo "<script>	
			location.href='./../panels.php';
			</script>";
			exit();
		}else{
			echo "Error: ". $sql . "<br>" . $conexao->error;
			exit();
		}
		
	}

	function Delete($conexao, $id){
		$sql = "DELETE FROM `tbl_tarefas` WHERE id = '{$id}'";
		
		if($conexao->query($sql) === true){
			echo "<script>	
			location.href='./../panels.php';
			</script>";
			exit();
		}else{
			echo "Error: ". $sql . "<br>" . $conexao->error;
			exit();
		}
	}

	


?>
