<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Personalize sua Interface </title>

    <?php 
        include 'compara.inc';
    ?>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/main_config.css">
</head>
<body>
    <div class="container-fluid main-container">
        <div class="row area">
            <div class="cols-sm-12 bg-light">
                <?php if(isset($_COOKIE["corperso"]) ) { 
                    echo("<img src='img/" . $_COOKIE['corperso'] . ".jpg' width='100%' height='100%' class='img-fluid'>");
                } else { ?>
                    <img width="100%" src="img/azul.jpg" class="img-fluid">
                <?php } ?>
            </div>
        </div>

        <br>

        <div class="row area">
            <div class="col-sm-12 bg-light">
                <h6>
                    <p align="right"> Personalize sua INTERFACE 
                        <a href="cookie.php?id=azul">
                            <img src="img/btnazul.png" border=no width=30 height=30>
                        </a> &nbsp; &nbsp;
                        <a href="cookie.php?id=vermelho">
                            <img src="img/btnvermelho.jpg" border=no width=30 height=30>
                        </a> &nbsp; &nbsp;
                        <a href="cookie.php?id=verde">
                            <img src="img/btnverde.png" border=no width=30 height=30>
                        </a> &nbsp; &nbsp;
                    </p>
                </h6>
            </div>
        </div>
        <!-- Butão -->
        <nav class="navbar navbar-expand-lg navbar-dark azul">
            <a class="navbar-brand" href="#">MINHA MARCA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Ação</a>
                    <a class="dropdown-item" href="#">Outra ação</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Algo mais aqui</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Desativado</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>

        <br>

        <div class="row area">
            <div class="col-sm-12 bg-light">
                <h3>ABOUT US</h3>
                <br>
                <br>
                XXXXXXXXXXXX<br>
                XXXXXXXXXXXX<br>
                XXXXXXXXXXXX<br>
                XXXXXXXXXXXX<br>
                XXXXXXXXXXXX<br>
            </div>
        </div>

        <div class="row rodape">
            <div class="col-sm-12 text-ligth">
                <h4> RODAPE </h4>                
            </div>
        </div>
    </div>

    <script src="javascript/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>