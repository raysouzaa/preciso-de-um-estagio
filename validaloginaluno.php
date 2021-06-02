<?php
	$conexao = mysqli_connect("localhost","root","","bdestagio") or die;

	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$qtd_usuarios = "SELECT * FROM aluno WHERE email='$email'";
	$busca = mysqli_query($conexao, $qtd_usuarios);
	$num_linhas = mysqli_num_rows($busca);
	
	if($num_linhas>0){
		while($info = mysqli_fetch_array($busca)){  
			if($info['senha']==$senha){
                session_start();
                $_SESSION['usuario'] = $email;
		        $_SESSION['senha'] = $senha;
				header('Location: vernoticiaaluno.php');
			} else {
				
			}
		}
	} else {
		echo "Email ou usuário está incorreto ou não está cadastrado" . "<br>";
		echo "Clique no botão para ser redirecionado para a página de cadastro" . "<br>";
		echo "<a href='cadastroaluno.php'><input type='button' value='Cadastro'></a>";
	}
	
	mysqli_close($conexao);
	
?>