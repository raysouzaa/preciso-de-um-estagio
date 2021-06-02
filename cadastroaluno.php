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
            <li><a  class="white-text" href="index.html">Página Principal</a></li>
        </ul>
<?php

$cpf = "cpf";
$nome = "nome";
$instituicao = "instituicao";
$curso = "curso";
$email = "email";
$senha = "senha";
$erro = 0;


?>
        <main>
            <section>
                <div>
                    <h3 class="center-align">Cadastro</h3>
                </div>
                <div class="row">
                    <form class="col s12 m6 l6 offset-l3 offset-m3" action="cadastraaluno1.php" method="POST">
                        <div class="row">
                            <div class="input-field col s12">
                            <input placeholder="Insira seu nome completo" id="nome" name="nome" type="text" class="validate" required>
                            <label for="first_name">Nome</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                            <input placeholder="Insira seu cpf" id="cpf" name="cpf" type="number" class="validate" required>
                            <label for="first_name">CPF</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                            <input placeholder="Insira sua instituição de ensino" id="instituicao" name="instituicao" type="text" class="validate" required>
                            <label for="first_name">Instituição de Ensino</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                            <input placeholder="Insira seu curso" id="curso" name="curso" type="text" class="validate" required>
                            <label for="first_name">Curso</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                            <input placeholder="Insira seu email" id="email" name="email" type="email" class="validate" required>
                            <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                            <input placeholder="Insira sua senha" id="senha" name="senha" type="password" class="validate" required>
                            <label for="password">Senha</label>
                            </div>
                        </div>
                        <div>
                            <button class="btn waves-effect waves-light col s12 m6 l6 offset-l3 offset-m3" type="submit" id="btn-submit" name="action">Cadastrar</button>
                        </div>
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