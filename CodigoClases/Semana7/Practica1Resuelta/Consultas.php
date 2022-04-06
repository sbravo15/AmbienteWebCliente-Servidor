<?php
include 'ConnBD.php';

if(isset($_POST["Consultar1"]))
{
    ConsultarVehiculos();
}

function ConsultarVehiculos()
{
    $enlace = ConectarBaseDatos();
    $sentencia = "CALL ConsultaVehiculos();";
    $listaProductos = $enlace -> query($sentencia);

    while($item = mysqli_fetch_array($listaProductos))
    {
      echo "<tr>";
      echo "<td>" . $item["Placa"] . "</td>";
      echo "<td>" . $item["Marca"] . "</td>";
      echo "<td>" . $item["Valor_Inicial"] . "</td>"; 
      echo "<td>" . $item["Fabricacion"] . "</td>";
      echo "<td>" . $item["Porcentaje_Anual"] . "</td>";
      echo '<td><input type="button"  class="btn btn-primary" value="Calcular Precio" onclick="CalcularPrecioAuto(this)"></td>';
      echo "</tr>";
    }
    CerrarBaseDatos($enlace);
}

?>