<?php

if(isset($_POST["Consultar"]))
{
    Consultar();
}

function Consultar()
{
    include 'ConnBD.php';
    $enlace = ConectarBD();

    $sentencia = "CALL ConsultarZapatos()";
    $listaZapatos = $enlace -> query($sentencia);

    while($fila = mysqli_fetch_array($listaZapatos))
    {
        echo "<tr >";
        echo "<td>" . $fila["Codigo"] . "</td>";
        echo "<td>" . $fila["Precio"] . "</td>";
        echo "<td>" . $fila["PorcObligatorio"] . "</td>";
        echo "<td>" . $fila["PorcOpcional"] . "</td>";
        echo '<td><input type="button" class="form-control" value="Calcular" onclick="Calcular2(this)">
        <a href="EditarInformacion.php?q='. $fila["Codigo"] .'" class="form-control btn btn-success">Editar</a>';
        echo '</td>';
        echo "</tr>";

    }

    CerrarBD($enlace);
}

?>