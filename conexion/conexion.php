<?php
//Archivo que me permite hacer la conexion ala base de datos para hacer consultas sql
$con = mysqli_connect("localhost", "root", "", "colegio");
//Condicion que me permite validar si hubo un error en la conexion
if (mysqli_connect_errno()) {
    echo 'Conexion fallida';
}
//Condicion que me permite asignar el cotejamiento ala base de datos
if (!mysqli_set_charset($con, "utf8")) {
    
}

