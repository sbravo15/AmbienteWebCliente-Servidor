<?php

function Consultar()
{
    include 'ConnBD.php';
    $enlace = ConectarBD();

    $sentencia = "CALL ConsultarZapatos()";
    $listaZapatos = $enlace -> query($sentencia);

    CerrarBD($enlace);

    return $listaZapatos;

}

?>