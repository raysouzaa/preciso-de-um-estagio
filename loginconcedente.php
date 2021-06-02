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
        <main>
            <section>
                <div>
                    <h3 class="center-align">Login</h3>
                    <p class="center-align">Faça o login para continuar.</p>
                </div>
                <div class="row">
                    <form class="col s12 m6 l6 offset-l3 offset-m3" action="validaloginconcedente.php" method="POST">
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Digite seu email" id="email" type="email" name="email" required>
                                <label for="email">Email</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Digite sua senha" id="senha" type="password" name="senha" required>
                                <label for="senha">Senha</label>
                            </div>
                        </div>
                        <div>
                            <button class="btn waves-effect waves-light col s12 m6 l6 offset-l3 offset-m3" type="submit" id="btn-submit">Entrar</button>
                        </div>  
                    </form>
                </div>
                <div class="row"> 
                    <form class="col s12 m6 l6 offset-l3 offset-m3">   
                        <p class="center-align">Se você não tem cadastro, cadastre-se aqui:</p>
                        <a href="cadastroconcedente.php" class="waves-effect waves-light btn col s12 m6 l6 offset-l3 offset-m3">Cadastrar</a>
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