<?php include 'General.php'; ?>

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
    <form>

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

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-2">
                    </div>
                    <div class="col-md-6">
                        <table id="Datos" class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Precio</th>
                                    <th>% Obligatorio</th>
                                    <th>% Opcional</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody id="ContenidoTabla">
                               
                            </tbody>
                        </table>
                        <input type="button" class="form-control" value="Contar % mayores o iguales a 5">
                        <input type="button" class="form-control" value="Contar % menores a 5">
                        <input type="button" class="form-control" onclick="SumarTotales();" value="Sumar precios totales">
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
                <!--<div class="row">

                    <div class="col-md-4">
                        <p id="pSaludo">Buenas tardes</p>
                        <p id="pSaludo2">Buenas tardes</p>
                    </div>

                    <div class="col-4">
                        <label id="lblResultado"></label>
                    </div>

                    <div class="col-4">
                        <input type="text" id="txtEstudiante" />
                        <input type="text" id="txtEstudiante2" />
                        <input type="button" id="btnDespedir" value="Despedir" onclick="Despedir();">
                    </div>

                </div>-->

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

$("#btnDespedir").click(function(e) {
    //Despedir();
});

//JavaScript
//onload = Saludar();

//JQuery
$(document).ready(function() {
    //Saludar();

    $.ajax({
        type: 'POST',
        url: 'ConsultarDatos.php',
        data: { "Consultar" : "Consultar" },
        success: function(response) 
        { 
            $("#ContenidoTabla").html(response);
        },
        error: function(error)
        {
            console.log("Se presentó un error:" + error );
        }
    });
    

});

</script>

</form>
</body>
</html>