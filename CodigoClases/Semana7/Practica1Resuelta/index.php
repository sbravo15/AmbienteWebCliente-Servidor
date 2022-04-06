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

    <div class="d-flex" id="wrapper">

        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            </nav>

            <div class="container-fluid">

                <div class="row">

                    <div class="col-2">
                    </div>
                    <div class="col-8">

					<br/>
                        <table id="Tabla" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Placa</th>
                                    <th>Marca</th>
                                    <th>Valor Inicial $</th>
                                    <th>Fabricación</th>
                                    <th>Porcentaje Anual</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="Datos">
                            </tbody>
                        </table>
                        <input type="button" class="btn btn-info" onclick="contarcondiciones();" value="Contar Condiciones">
                        <textarea id="Condiciones" type="text" class="form-control" rows="5" disabled></textarea>
                    </div>
                    </div>
                    <div class="col-2">
                    </div>
                </div>
            </div>
        </div>

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="js\Funciones.js"></script>

    </div>
</body>
</html>