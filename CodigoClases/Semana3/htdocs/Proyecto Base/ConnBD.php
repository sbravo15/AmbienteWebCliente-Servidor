<?php

    function ConectarBD()
    {
        $servidor = "localhost";
        $baseDatos = "VN_BD1";
        $usuario = "root";
        $clave = "";

        return mysqli_connect($servidor, $usuario, $clave, $baseDatos);
    }

    function CerrarBD($enlace)
    {
        mysqli_close($enlace);
    }

?>