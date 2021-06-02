<?php
$conexao = mysqli_connect("localhost","root","","bdestagio");
	
if(!$conexao){
    die("Erro de conexao: " . mysqli_error());
} else {
    echo "Banco de dados conectado" . "<br>";
}

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$texto = $_POST['texto'];

$ver_noticia = "SELECT * FROM noticias WHERE nome='$nome'";
	$busca = mysqli_query($conexao, $ver_noticia);
	$num_linhas = mysqli_num_rows($busca);
	
	if($num_linhas==0){
		$inserir = "INSERT INTO noticias (nome, sobrenome, cidade, estado, email, titulo, subtitulo, texto) VALUES ('$nome','$sobrenome','$cidade','$estado','$email','$titulo','$subtitulo','$texto')";
        $resultado_usuarios = mysqli_query($conexao, $inserir) or die("Erro ao cadastrar noticia.");
        session_start();
        $_SESSION['email'] = 'email';
        $_SESSION['senha'] = 'senha';
        header('Location: noticias.php');
	}

	mysqli_close($conexao);
?>
