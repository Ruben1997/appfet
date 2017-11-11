<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>App - Inicio</title>
        <script src="js/jquery.js" type="text/javascript"></script>
        <!--Libreria para diseño de la pagina web -->
        <link href="librerias/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="librerias/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!--Fin lebrerias-->
        <!--Archivo de estilos css para el diseño de la pagina web-->
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <!--Fin archivo css-->
    </head>
    <style>
        /*Estilos css para cambiar el tamaño y fuete de la letra*/
        body {
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            font-size: 16px;
        }
        /*Estilos que me permiten darle sombra a las cajas de los contenedores de contenido*/
        .sombra{
            box-shadow:2px 2px 5px 1px #999;
            cursor: pointer;
        }
    </style>
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
                        <li class="seleccione active"><a href="index.php">Inicio</a></li>
                        <li class="seleccione"><a href="consultar.php">Consultas</a></li>
                        <li class="seleccione"><a href="informacion.php">Informacion</a></li>
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
                        <h3 style="margin-top: 50px;">APP - INICIO</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--Fin codigo-->
        <br/>
        <div class="container" id="masthead">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default sombra">
                        <div class="panel-body">
                            <!--Codigo que me permite mostrar el slider con las imagenes de la escuela-->
                            <div class="bs-example" data-example-id="carousel-with-captions">
                                <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-captions" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-captions" data-slide-to="2"></li>
                                        <li data-target="#carousel-example-captions" data-slide-to="3"></li>
                                        <li data-target="#carousel-example-captions" data-slide-to="4"></li>
                                        <li data-target="#carousel-example-captions" data-slide-to="5"></li>
                                        <li data-target="#carousel-example-captions" data-slide-to="6"></li>
                                        <li data-target="#carousel-example-captions" data-slide-to="7"></li>
                                        <li data-target="#carousel-example-captions" data-slide-to="8"></li>
                                        <li data-target="#carousel-example-captions" data-slide-to="9"></li>
                                        <li data-target="#carousel-example-captions" data-slide-to="10"></li>
                                        <li data-target="#carousel-example-captions" data-slide-to="11"></li>
                                        <li data-target="#carousel-example-captions" data-slide-to="12"></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="img/1.jpg" alt="Unidad 1">
                                            <div class="carousel-caption">
                                                <h3>Unidad 1</h3>
                                                <p>Nota 1</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/2.jpg" alt="Unidad 2">
                                            <div class="carousel-caption">
                                                <h3>Unidad 2</h3>
                                                <p>Nota 2</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/3.jpg" alt="Unidad 3">
                                            <div class="carousel-caption">
                                                <h3>Unidad 3</h3>
                                                <p>Nota 3</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/5.jpg" alt="Unidad 4">
                                            <div class="carousel-caption">
                                                <h3>Unidad 4</h3>
                                                <p>Nota 4</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/6.jpg" alt="Unidad 5">
                                            <div class="carousel-caption">
                                                <h3>Unidad 5</h3>
                                                <p>Nota 5</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/6.jpg" alt="Unidad 6">
                                            <div class="carousel-caption">
                                                <h3>Unidad 6</h3>
                                                <p>Nota 6</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/8.jpg" alt="Unidad 7">
                                            <div class="carousel-caption">
                                                <h3>Unidad 7</h3>
                                                <p>Nota 7</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/8.jpg" alt="Unidad 8">
                                            <div class="carousel-caption">
                                                <h3>Unidad 8</h3>
                                                <p>Nota 8</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/9.jpg" alt="Unidad 8">
                                            <div class="carousel-caption">
                                                <h3>Unidad 9</h3>
                                                <p>Nota 9</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/11.jpg" alt="Unidad 8">
                                            <div class="carousel-caption">
                                                <h3>Unidad 10</h3>
                                                <p>Nota 10</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/12.jpg" alt="Unidad 8">
                                            <div class="carousel-caption">
                                                <h3>Unidad 11</h3>
                                                <p>Nota 11</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/14.jpg" alt="Unidad 8">
                                            <div class="carousel-caption">
                                                <h3>Unidad 12</h3>
                                                <p>Nota 12</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/15.jpg" alt="Unidad 8">
                                            <div class="carousel-caption">
                                                <h3>Unidad 13</h3>
                                                <p>Nota 13</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <!--Fin codigo slider imagenes-->
                        </div>
                    </div>
                </div>
                <!--Codigo que me permite mostrar los paneles con la mision y la vision-->
                <div class="col-md-6">
                    <div class="panel panel-default sombra">
                        <div class="panel-heading text-center"><strong>Mision</strong></div>
                        <div class="panel-body">
                            <div class="col-md-12 ">
                                Ser una institucion que haga de las necesidades educativas, soluciones en el medio informatico que contribuya con el aprendizaje de los estudiantes 
                                enseñandoles a desarrollarse en el medio informatico.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default sombra">
                        <div class="panel-heading text-center"><strong>Vision</strong></div>
                        <div class="panel-body">
                            <div class="col-md-12 ">
                                En el zozo seremos una sede reconocida a nivel regional, con excelencia en el nivel educativo informatico donde se les enseñara administracion del manejo de 
                                programas como lo son Power Point, Excel, Word, Etc.
                            </div>
                        </div>
                    </div>
                    <!--Fin codigo mision y vision-->
                </div>
            </div>
        </div>
        <!--Codigo html para mostrar el pie de la pagina o footer-->
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
        <!--Fin footer-->
    </body>
</html>



