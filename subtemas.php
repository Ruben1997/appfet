<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>App - Subtemas</title>
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
                        <li class="seleccione"><a href="index.php">Inicio</a></li>
                        <li class="seleccione active"><a href="consultar.php">Consultas</a></li>
                        <li class="seleccione"><a href="informacion.php">Informacion</a></li>
                        <li class="seleccione"><a href="creditos.php">Creditos</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="headerwrap2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h3 style="margin-top: 50px;">APP - INICIO</h3>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="container">
            <!--Codigo que me permite mostrar un panel con un titulo para la pagina-->
            <div class="alert alert-success sombra text-center" role="alert">
                <strong>SubTemas</strong>
            </div>
            <!--Fin codigo-->
            <div id="">
                <?php
                //Codigo que me permite incluir la conexion para poder realizar consultas sql
                include_once 'conexion/conexion.php';
                //Codigo que me permite obtener el id para consultar los subtemas de determinado tema
                $id = $_GET['id'];
                //Codigo que me permite consultar los datos de una determina tabla de la base de datos
                $sql = mysqli_query($con, "SELECT subtemas.subid, subtemas.subnombre, subtemas.subimagen FROM subtemas WHERE subtemas.subestado='A' AND subtemas.subidtema='" . $id . "' ORDER BY subtemas.subnombre");
                //Ciclo que me permite imprimir los datos obtenidos de la consulta sql
                while ($row = mysqli_fetch_array($sql)) {
                    ?>
                    <!--Codigo que me permite mostrar los subtemas de determinado tema-->
                    <div class="col-md-6">
                        <div style="height: 400px;" class="panel panel-success sombra">
                            <div class="panel-heading initialism">
                                <a href="detallesubtema.php?id=<?php echo $row['subid']; ?>"><?php echo $row['subnombre'] ?></a>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <a class="thumbnail img-responsive">
                                        <img src="imagenes/<?php echo $row['subimagen'] ?>" width="300px" height="300px">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin codigo paneles-->
                    <?php
                }
                ?>
            </div>
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


