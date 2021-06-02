<?php
	$conexao = mysqli_connect("localhost","root","","bdestagio");
	
	if(!$conexao){
		die("Erro de conexao: " . mysqli_error());
	} else {
		echo "Banco de dados conectado" . "<br>";
	}
	
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$empresa = $_POST['empresa'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$qtd_usuarios = "SELECT * FROM concedente WHERE email='$email'";
	$busca = mysqli_query($conexao, $qtd_usuarios);
	$num_linhas = mysqli_num_rows($busca);
	
	if($num_linhas==0){
		$inserir = "INSERT INTO concedente (nome, cpf, empresa, email, senha) VALUES ('$nome','$cpf','$empresa','$email','$senha')";
        $resultado_usuarios = mysqli_query($conexao, $inserir) or die("Erro ao cadastrar usuario.");
        session_start();
        $_SESSION['email'] = 'email';
        $_SESSION['senha'] = 'senha';
        header('Location: loginconcedente.php');
	} elseif ($num_linhas>0) {
        //cadastro ja existente
        header('Location: loginconcedente.php');
    }
	
	mysqli_close($conexao);
?>