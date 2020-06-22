<?php
session_start();

include('conexao.php');

	if(isset($_POST['email']) || isset($_POST['pass'])){
		if(empty($_POST['email'] || empty($_POST['pass']))){
		header('Location: login_ui.php');
		
		exit();
	}
//		$error = "Usuário ou senha Incorreto(s)";
		$email = mysqli_real_escape_string($conexao, $_POST['email']);
 		$senha = mysqli_real_escape_string($conexao, $_POST['pass']);


	$query = "SELECT id, nome FROM `tbl_usuario` WHERE email = '{$email}' AND senha = md5('{$senha}')";

	$result = mysqli_query($conexao, $query);

	$row = mysqli_num_rows($result);
        
        
        $dados = mysqli_fetch_array($result);
			$_SESSION['email'] = $dados['email'];
            $_SESSION['nome'] = $dados['nome'];
        

    
			
		if($row === 0){	
			$_SESSION['nao_autenticado'] = true;
			header('Location: login_ui.php');
			exit();
		}else{
           $_SESSION['email'] = $email;
           $_SESSION['nome'] = $dados['nome'];
		
            header('Location: panels.php');
			exit();
		}
			

		
	}
?>