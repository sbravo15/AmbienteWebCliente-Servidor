<?php

    function ConectarBD()
    {
        $servidor = "localhost";
        $baseDatos = "bd_viernes";
        $usuario = "root";
        $clave = "";

        return mysqli_connect($servidor, $usuario, $clave, $baseDatos);
    }

    function CerrarBD($enlace)
    {
        mysqli_close($enlace);
    }

?>