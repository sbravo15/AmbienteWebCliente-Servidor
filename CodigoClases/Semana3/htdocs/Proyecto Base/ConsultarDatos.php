<?php

function Consultar()
{
    include 'ConnBD.php';
    $enlace = ConectarBD();


    
    CerrarBD($enlace);
}

?>