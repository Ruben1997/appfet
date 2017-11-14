<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>App - Videos</title>
        <script src="js/jquery.js" type="text/javascript"></script>
        <!--Libreria para diseño de la pagina web -->
        <link href="librerias/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="librerias/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!--Fin lebrerias-->
        <!--Archivo de estilos css para el diseño de la pagina web-->
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <!--Fin archivo css-->
    </head>
    <body>
        <!--Codigo html para crear la barra de navegacion o cabecera de la pagina-->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--Codigo que me permite mostrar el nombre de la aplicacion-->
                    <a class="navbar-brand" href="">App aprendiendo informatica</a>
                    <!--Fin codigo-->
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!--Codigo que me permite mostrar los items o enlaces para navegar entre las distintas paginas-->
                        <li class="seleccione"><a href="index.html">Inicio</a></li>
                        <li class="seleccione"><a href="consultar.php">Consultas</a></li>
                        <li class="seleccione"><a href="informacion.php">Informacion</a></li>
                        <li class="seleccione"><a href="galeria.php">Galeria</a></li>
                        <li class="seleccione active"><a href="videos.php">Videos</a></li>
                        <li class="seleccione"><a href="creditos.php">Creditos</a></li>
                        <!--Fin codigo-->
                    </ul>
                </div>
            </div>
        </div>
        <!--Fin cabecera pagina-->
        <!--Codigo para mostrar el texto de la pagina donde estoy ubicado-->
        <div id="headerwrap2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h3 style="margin-top: 50px;">APP - VIDEOS</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--Fin codigo-->
        <br/>
        <div class="container">
            <div class="alert alert-success sombra text-center" role="alert">
                <strong>Videos</strong>
            </div>
            <!--Fin codigo-->
            <br/>
            <div class="col-md-6">
                <div class="panel panel-default sombra">
                    <div class="panel-body">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7N2SjoqRHn8" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default sombra">
                    <div class="panel-body">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NIk76R_EOtU" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default sombra">
                    <div class="panel-body">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0jZ44WGHUNA" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default sombra">
                    <div class="panel-body">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bKl_R8t9teo" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Codigo html para mostrar el pie de la pagina o footer-->
        <div class="footer"><strong>Copyright &copy; 2017</strong></div>
        <!--Fin footer-->
    </body>
</html>







