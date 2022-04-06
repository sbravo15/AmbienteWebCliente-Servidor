<?php 
include 'General.php'; 
include 'ConsultarDatos.php'; 

$codigo = $_GET["q"];

if(isset($_POST["btnActualizar"]))
{
    $precio = $_POST["txtPrecio"];
    $obligatorio = $_POST["txtObligatorio"];
    $opcional = $_POST["txtOpcional"];

    //Actualizar la información
    $resultado = ActualizarDatos($codigo, $precio, $obligatorio, $opcional);
    if($resultado == "")
    {
        //Mandamos un correo electrónico
        //SendEmail("", "Preguntar precios", "Quiero saber cuanto vale la licencia de office");
        
        //Lo llevamos a la pantalla principal
        header("Location: index.php");
    }
    else
    {
        echo $resultado;
    }
}

$zapato = ConsultarZapato($codigo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Start Bootstrap Template</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
</head>

<body>
    <form action="" method="Post">

    <div class="d-flex" id="wrapper">

        <?php MostrarMenu(); ?>

        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle">Menu</button>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!--
                placeholder, maxlenth, oncopy, onpaste, ondraw

                onclick, onblur, onfocus, onchange
                onmousemove, onmousehover   
                onkeypress, onkeyup, onkeydown    
                
                PHP
            -->

            <div class="container-fluid">

                <br/>
                <div class="row">
                    <div class="col-md-4">
                        <Label>Precio</Label>
                        <input type="text" required autocomplete="off" id="txtPrecio" name="txtPrecio" placeholder="PRECIO" value="<?php echo $zapato["Precio"]; ?>" class="form-control"
                        onkeypress="return validateNumber(event)">
                    </div>

                    <div class="col-md-4">
                        <Label>% Obligatorio</Label>
                        <input type="text" required autocomplete="off" id="txtObligatorio" name="txtObligatorio" maxlength="3" value="<?php echo $zapato["PorcObligatorio"]; ?>" class="form-control"
                        onkeypress="return validateNumber(event)">
                    </div>

                    <div class="col-md-4">
                        <Label>% Opcional</Label>
                        <input type="text" required autocomplete="off" id="txtOpcional" name="txtOpcional" maxlength="3" value="<?php echo $zapato["PorcOpcional"]; ?>" class="form-control"
                        onkeypress="return validateNumber(event)">
                    </div>
                </div>

                <br/>
                <div class="row">

                    <div class="col-md-4">
                        <input type="submit" id="btnActualizar" name="btnActualizar" value="Actualizar" class="btn btn-success">
                    </div>

                </div>

            </div>
        </div>
    </div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/simple-sidebar.js"></script>

<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>

</form>
</body>
</html>