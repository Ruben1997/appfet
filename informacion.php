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
                        <li class="seleccione"><a href="index.php">Inicio</a></li>
                        <li class="seleccione"><a href="consultar.php">Consultas</a></li>
                        <li class="seleccione active"><a href="informacion.php">Informacion</a></li>
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
                        <h3 style="margin-top: 50px;">APP - INFORMACION</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--Fin codigo-->
        <br/>
        <div class="container">
            <div class="alert alert-success sombra text-center" role="alert">
                <strong>Microsoft Office 365</strong>
            </div>
            <!--Fin codigo-->
            <br/>
            <div class="panel panel-default sombra">
                <div class="panel-body">
                    <a class="thumbnail img-responsive">
                        <img src="img/of.JPG" width="300px" height="300px">
                    </a>
                    Microsoft Office 365 es una solución de arrendamiento del paquete Microsoft Office (Excel, Word, PowerPoint, Outlook y Access) por pagos mensuales en vez de pagar el producto completo por un precio elevado. Normalmente Office 365 se adquiere pagando plazos por un número de meses a usar desde la página de Microsoft; sin embargo, para quienes no quieran pagarlo así, se puede pagar por un año completo (aplican impuestos según el país donde se encuentre). En este caso el máximo tiempo de uso del producto es de un año.

                    Las ediciones básicas tienen las aplicaciones mencionadas y Terabyte de espacio en OneDrive para fomentar el trabajo en La nube. Las soluciones para profesionales y empresas incluyen Exchange Online (correo electrónico empresarial con calendarios de uso compartido, correo de voz y mensajería unificada, correo electrónico móvil, buzones de 50GB), Skype Empresarial On Line (conferencias de audio y video de PC a PC y reuniones en línea con uso compartido del escritorio) y SharePoint Online para crear sitios para compartir documentos e información con colegas y clientes, extranet para compartir archivos de gran tamaño y acceso sin conexión a documentos a través de espacios de trabajo. y una suscripción Empresarial (medianas y grandes empresas).

                    Como requiere acceso a internet para activación y mantenimiento, además de guardar todos los documentos generados en Onedrive, puede sufrir pérdidas de servicio, como el que ocurrió el 23 de junio de 2014 del servicio de mensajería instantánea Lync y el día siguiente del correo electrónico Exchange durante múltiples horas.
                </div>
            </div>
            <div class="alert alert-success sombra text-center" role="alert">
                <strong>NUEVAS APLICACIONES OFFICE 365 (AÑO 2016)</strong>
            </div>
            <!--Fin codigo-->
            <br/>
            <div class="panel panel-default sombra">
                <div class="panel-body">
                    <a class="thumbnail img-responsive">
                        <img src="img/of2.png" width="300px" height="300px">
                    </a>
                    En el año 2016, Microsoft ha lanzado una amplia y novedosa gama de aplicaciones en este paquete. Con ellas pretende dar un mayor y mejor servicio a sus usuarios facilitándole el acceso, tratamiento y uso de la información. Sin duda (aunque también existen en modalidad de escritorio) queremos destacar la funcionalidad online de estas aplicaciones, siendo éstas:

                    <br/><br/>Sway: Aplicación utilizada para crear y compartir historias. A través de esta novedosa herramienta, el usuario podrá, de forma sencilla, crear informes y presentaciones con gran atractivo visual. Otra de sus funcionalidades más destacable es la facilidad para compartir las presentaciones, ya que dispone de la posibilidad de crear un enlace con el que cualquier usuario podrá acceder a ella.
                    <br/><br/>ONE NOTE: El bloc de notas de clase de Microsoft. Se encuentra disponible en sus versiones "para Educación". Con él, el profesor podrá generar un bloc de notas, con diversos apartados útiles para la vida diaria de la clase, que podrá realizar las funciones de aula virtual. Como aspectos destacables diremos que es una herramienta de uso intuitivo y sencillo tanto para el docente (no será necesario ser un experto) como para el estudiante, lo que hace muy recomendable su uso.
                    <br/><br/>Office Delve: Permite realizar búsquedas de información y contenido dentro del entorno de OFFICE 365, utilizando la tecnología "OFFICE Graph".
                    <br/><br/>Microsoft Teams: Esta aplicación permite a los usuarios crear un "área de trabajo" en el que poder ser más productivos y eficaces en su labor. Dentro de una misma área, lo usuarios podrán disponer de un chat instantáneo en el que debatir las decisiones a tomar, la posibilidad de uso de las diversas herramientas Office 365, así como compartir contenidos importantes en tiempo real. Otra de las funcionalidades destacadas de Teams es que permite realizar o programar reuniones, permitiendo el uso de Skype en ellas.
                    <br/><br/>Microsoft PowerApps: Con esta nueva herramienta Microsoft pretende permitir a sus usuarios crear y compartir aplicaciones propias para que sean usadas en cualquier dispositivo. Durante el proceso de construcción el usuario contará con la posibilidad de uso de diferentes herramientas, tanto del propio Office como de los servicios locales, así como la posibilidad de compartir la nueva aplicación a través del envío de un correo electrónico.
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




