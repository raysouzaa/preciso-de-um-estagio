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
            <h5 class="center">Cadastro Notícias</h5>
        </header>
<?php
$nome = "nome";
$sobrenome = "sobrenome";
$cidade = "cidade";
$estado = "estado";
$email = "email";
$titulo = "titulo";
$subtitulo = "subtitulo";
$texto = "textarea1";
$erro = 0;


?>
        <main>
            <section>
                <div class="row">
                    <form class="col s12 m6 l6 offset-l3 offset-m3" action="inserenoticia.php" method="POST">
                    <div class="row">
                        <div class="input-field col s12">
                        <input placeholder="Insira seu nome" id="nome" name="nome" type="text" class="validate" required>
                        <label for="first_name">Nome *</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                        <input placeholder="Insira seu sobrenome" id="sobrenome" name="sobrenome" type="text" class="validate" required>
                        <label for="first_name">Sobrenome *</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                        <input placeholder="Insira sua Cidade" id="cidade" name="cidade" type="text" class="validate" required>
                        <label for="first_name">Cidade *</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                        <input placeholder="Insira seu Estado:(Exemplo: SP, RS, BA)" id="estado" name="estado" type="text" size="5" class="validate" required>
                        <label for="first_name">Estado *</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                        <input placeholder="Insira seu email" id="email" name="email" type="email" class="validate" required>
                        <label for="email">Email *</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                        <input placeholder="Insira o Título do texto" id="titulo" name="titulo" type="text" class="validate" required>
                        <label for="first_name">Título *</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                        <input placeholder="Insira o Subtítulo do texto" id="subtitulo" name="subtitulo" type="text" class="validate" required>
                        <label for="first_name">Subtítulo *</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                        <textarea placeholder="Insira o texto" id="textarea1" name="texto" class="materialize-textarea"></textarea>
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
                    © 2019 Copyright Raiany de Souza & Leonardo Almeida & Bianca Silva
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