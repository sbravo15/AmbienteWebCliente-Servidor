<?php

function ConectarBaseDatos()
{
    $servidor = "localhost";
    $baseDatos = "practica1";
    $usuario = "root";
    $clave = "";

    return mysqli_connect($servidor, $usuario, $clave, $baseDatos);
}

function CerrarBaseDatos($enlace)
{
    mysqli_close($enlace);
}

?>