<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<title>PRECISO DE UM ESTÁGIO</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="css/custom.css">
    </head>
    <body>
        <div class="navbar-fixed">  
            <nav role="navigation ">
                <div class="nav-wrapper teal lighten-1 ">
                    <a href="index.html" class="brand-logo center">Preciso de um Estágio</a>
                    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="cadastronoticia.php">Cadastrar Noticia</a></li>
                    </ul>

                </div>
            </nav>
        </div>
        <header>
            <h6>Seja bem-vindo!</h6>
        </header>
        <section>
            <main>
<?php
$conexao = mysqli_connect("localhost","root","","bdestagio");
	
if(!$conexao){
    die("Erro de conexao: " . mysqli_error());
} else {
    echo " " . "<br>";
}

    $sql= "SELECT * FROM noticias";

    $resultado=mysqli_query($conexao, $sql);
    if($resultado) {
        if(mysqli_num_rows($resultado)==0)
        {
        echo"Nenhuma noticia encontrada!";
        }else{

        while ($linha=mysqli_fetch_array($resultado)) {

            $nome = $linha["nome"];
            $sobrenome = $linha["sobrenome"];
            $cidade = $linha["cidade"];
            $estado = $linha["estado"];
            $email = $linha["email"];
            $data = $linha["data"];
            $hora = $linha["hora"];
            $titulo = $linha["titulo"];
            $subtitulo = $linha["subtitulo"];
            $texto = $linha["texto"];
            $ver = $linha["ver"];


            echo "Autor: $nome $sobrenome - ($email)<br>";
            echo " ";
            echo "Cidade: $cidade - Estado: $estado<br>";
            echo " ";
            echo "Título da Notícia: $titulo<br>";
            echo " ";
            echo "Subtítulo da Notícia:  $subtitulo<br>";
            echo " ";
            echo "Notícia: $texto<br>";
            echo " ";
            echo"<a href='editarnoticia.php'><input type='button' value='editar'></a><br><br>";
        }
    }
}
mysqli_close($conexao);
?>
            </main>
        </section>

        <footer class="page-footer teal lighten-1">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Preciso de um Estágio</h5>
                        <p class="grey-text text-lighten-4">Volte sempre!</p>
                    </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2019 Copyright Raiany de Souza & Leonardo Almeida
                </div>
            </div>
        </footer>
        <!--Jquery-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
         <!--Materialize-->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
         <script src="js/script.js"></script>
    </body>
</html>