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
                    <ul class="right hide-on-med-and-down">
                        <li class="active"><a href="index.html">Página Principal</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <ul id="slide-out" class="sidenav teal lighten-1"  >
            <li><a  class="white-text" href="#home">Página Principal</a></li>
        </ul>
        <header>
            <h5 class="center">Editar Notícias</h5>
        </header>
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

        
    }
    }
}


?>
        <main>
            <section>
                <div class="row">
                    <form class="col s12 m6 l6 offset-l3 offset-m3" action="editarbdnoticia.php" method="POST">
                    <div class="row">
                        <div class="input-field col s12">
                        <p for="first_name"><b>Nome completo: </b><?php  echo " $nome $sobrenome <br>";?></p>
                        <p for="first_name"><b>Email: </b><?php  echo " $email<br>";?></p>
                        <p for="first_name"><b>Cidade/Estado: </b><?php  echo " $cidade / $estado<br>";?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                        <input placeholder="Insira um novo título do texto" id="titulo" name="titulo_novo" type="text" class="validate" required>
                        <label for="first_name">Título *</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                        <input placeholder="Insira um novo subtítulo do texto" id="subtitulo" name="subtitulo_novo" type="text" class="validate" required>
                        <label for="first_name">Subtítulo *</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                        <textarea placeholder="Insira um novo texto" id="textarea1" name="texto_novo" class="materialize-textarea"></textarea>
                        <label for="textarea1">Texto *</label>
                        </div>
                    </div>
                    <div>
                        <button class="btn waves-effect waves-light col s12 m6 l6 offset-l3 offset-m3" type="submit" id="btn-submit" name="action">Cadastrar</button>
                    </div>
                    <br>
                    <p>Campos marcados com * são obrigatórios no cadastro.</p>
                    <p>Observação: Será inserido no seu cadastro a data atual, bem como a hora atual do cadastro.</p><br>
                    </form>
                </div>
            </section>
        </main>
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