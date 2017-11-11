<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>App - Creditos</title>
        <script src="js/jquery.js" type="text/javascript"></script>
        <link href="librerias/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="librerias/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            font-size: 16px;
        }
        .sombra{
            box-shadow:2px 2px 5px 1px #999;
            cursor: pointer;
        }
    </style>
    <body>
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">App aprendiendo informatica</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="seleccione"><a href="index.html">Inicio</a></li>
                        <li class="seleccione"><a href="consultar.php">Consultas</a></li>
                         <li class="seleccione"><a href="informacion.php">Informacion</a></li>
                        <li class="seleccione active"><a href="creditos.php">Creditos</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="headerwrap2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h3 style="margin-top: 50px;">APP - CREDITOS</h3>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="container">
            <!--Codigo que me permite mostrar los paneles con los nombres y fechas de nacimiento de los integrantes del proyecto-->
            <div class="alert alert-success sombra text-center" role="alert">
                <strong>Creditos</strong>
            </div>
            <div id="">
                <div class="col-md-6">
                    <div class="panel panel-success sombra">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <label class="form-control text-center">Jose David Chavez Chala</label>
                                <label class="form-control text-center">9 de Mayo del 2009</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-success sombra">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <label class="form-control text-center">Yimi Geovani Fierro Jojoa</label>
                                <label class="form-control text-center">2 de Abril del 2009</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-success sombra">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <label class="form-control text-center">Danny Aledsandra Tole Tunjano</label>
                                <label class="form-control text-center">7 de Agosto del 2009</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-success sombra">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <label class="form-control text-center">Danna Liced Fierro</label>
                                <label class="form-control text-center">11 de Octubre del 2009</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Fin codigo paneles-->
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <span class="copyright">Copyright &copy; 2017</span>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
