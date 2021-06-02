<?php
$conexao = mysqli_connect("localhost","root","","bdestagio");
	
if(!$conexao){
    die("Erro de conexao: " . mysqli_error());
} else {
    echo " " . "<br>";
}
$titulo = $_POST['titulo_novo'];
$subtitulo = $_POST['subtitulo_novo'];
$texto = $_POST['texto_novo'];

$ver_noticia = "SELECT * FROM noticias";
	$busca = mysqli_query($conexao, $ver_noticia);
	$num_linhas = mysqli_num_rows($busca);
	
	if($num_linhas==0){
        echo"Não existe noticia!";
    }else{
		$inserir = "INSERT INTO noticias (titulo_novo, subtitulo_novo, texto_novo) VALUES ('$titulo','$subtitulo','$texto')";
        $resultado_usuarios = mysqli_query($conexao, $inserir);
        session_start();
        $_SESSION['email'] = 'email';
        $_SESSION['senha'] = 'senha';
        header('Location: noticias.php');
	}

	mysqli_close($conexao);
?>
