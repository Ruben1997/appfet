<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>App - Detalle</title>
        <script src="js/jquery.js" type="text/javascript"></script>
        <link href="librerias/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="librerias/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
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
                        <li class="seleccione active"><a href="consultar.php">Consultas</a></li>
                        <li class="seleccione"><a href="informacion.php">Informacion</a></li>
                        <li class="seleccione"><a href="galeria.php">Galeria</a></li>
                        <li class="seleccione"><a href="videos.php">Videos</a></li>
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
            <?php
            //Codigo que me permite obtener el id para consultar los datos detallado de determinado subtema
            $id = $_GET['id'];
            //Codigo que me permite incluir la conexion para poder realizar consultas sql
            include_once 'conexion/conexion.php';
            //Codigo que me permite consultar los datos de una determina tabla de la base de datos
            $sql = mysqli_query($con, "SELECT subtemas.subid, subtemas.subidtema, subtemas.subimagen, subtemas.subnombre, subtemas.subdescripcion, subtemas.sublinkvideo FROM subtemas WHERE subtemas.subid='" . $id . "'");
            //Ciclo que me permite imprimir los datos obtenidos de la consulta sql
            while ($row = mysqli_fetch_array($sql)) {
                ?>
                <!--Codigo que me permite centrar y mostrar un panel con la informacion detallada del subtemas seleccionado-->
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="panel panel-success sombra">
                        <div class="panel-body">
                            <div class="text-center form-control" style="margin-bottom: 5px;">
                                <label>
                                    <?php echo $row['subnombre']; ?>
                                </label>
                            </div>
                            <a class="thumbnail img-responsive">
                                <img src="imagenes/<?php echo $row['subimagen'] ?>" width="300px" height="300px">
                            </a>
                            <div class="">
                                <?php echo $row['subdescripcion']; ?>
                            </div>
                            <!--Condicion que me permite validar si el campo video viene vacion o no-->
                            <?php if ($row['sublinkvideo'] != "") { ?>
                                <div class="text-center">
                                    <label class="form-control">
                                        Video
                                    </label>
                                </div>
                                <iframe width="100%" height="315" src="<?php echo $row['sublinkvideo']; ?>" frameborder="0" allowfullscreen></iframe>
                            <?php } ?>
                            <!--Fin validacion-->
                            <!--Enlace en forma de boton que me permite volver ala pagina principal-->
                            <div style="margin-top: 20px;" class="text-center">
                                <a href="consultar.php" class="btn btn-danger">Volver</a>
                            </div>
                            <!--Fin enlace-->
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
                <!--Fin codigo detalle subtema-->
            </div>
            <?php
        }
        ?>
    </div>
    <!--Codigo html para mostrar el pie de la pagina o footer-->
    <div class="footer"><strong>Copyright &copy; 2017</strong></div>
    <!--Fin footer-->
</body>
</html>