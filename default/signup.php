<?php 
session_start();
	
	include('conexao.php');
	
	 	$nome   =   $_POST['nome'];
    	$cpf    =   $_POST['cpf'];
		$email  =   $_POST['email'];
    	$pass   =   $_POST['pass'];


	$queryEmail = "SELECT * FROM tbl_usuario WHERE email = '".$email."'";
	$queryEmailExe = mysqli_query($conexao, $queryEmail);
	

	if(mysqli_num_rows($queryEmailExe) < 1 ){
				$query = "INSERT INTO tbl_usuario(cpf, email, nome, senha) VALUES ('".$cpf."','".$email."','".$nome."',md5('".$pass."'))";
							$result = mysqli_query($conexao, $query);
							$row = mysqli_num_rows($result);
				
				if($row === 0){	
					
					header('Location: signup_ui.php');
					exit();
				}
				else{	
					
					header('Location: login_ui.php');
					exit();
				}				
			}else{
		
			$_SESSION['existe'] = true;
			header('Location: signup_ui.php');		
			exit();
		
			}
?>
