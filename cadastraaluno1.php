<?php
	$conexao = mysqli_connect("localhost","root","","bdestagio");
	
	if(!$conexao){
		die("Erro de conexao: " . mysqli_error());
	} else {
		echo "Banco de dados conectado" . "<br>";
	}
	
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$instituicao = $_POST['instituicao'];
	$curso = $_POST['curso'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$qtd_usuarios = "SELECT * FROM aluno WHERE email='$email'";
	$busca = mysqli_query($conexao, $qtd_usuarios);
	$num_linhas = mysqli_num_rows($busca);
	
	if($num_linhas==0){
		$inserir = "INSERT INTO aluno (nome, cpf, instituicao, curso, email, senha) VALUES ('$nome','$cpf','$instituicao','$curso','$email','$senha')";
        $resultado_usuarios = mysqli_query($conexao, $inserir) or die("Erro ao cadastrar usuario.");
        session_start();
        $_SESSION['email'] = 'email';
        $_SESSION['senha'] = 'senha';
        header('Location: loginaluno.php');
	} elseif ($num_linhas>0) {
        //cadastro ja existente
        header('Location: loginaluno.php');
    }
	
	mysqli_close($conexao);
?>