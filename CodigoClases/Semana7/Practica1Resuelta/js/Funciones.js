var tabla = document.getElementById("Tabla");
var year = new Date().getFullYear();

$(document).ready(function () {
    $.ajax({
        type: "POST",
        url: "Consultas.php",
        data: {
            "Consultar1": "Consultar1"
        },
        success: function (response) {
            $("#Datos").html(response);
        },
        error: function (err) {
            alert("Se presentó un error al consulta los datos");
        },
    });
});

function CalcularPrecioAuto(obj) {
    let index = obj.parentNode.parentNode.rowIndex;
    let resultado = Operacion(index);
    let cantidadannos = year - parseFloat(tabla.rows[index].cells[3].innerHTML);

    if (resultado >= 30000 && cantidadannos > 0) {
        alert("Condición Alta\n" +
            "El valor actual del vehiculo es: $" + resultado + " dólares.");
    } else if (resultado >= 10000 && resultado < 30000) {
        alert("Condición Media\n" +
            "El valor actual del vehiculo es: $" + resultado + " dólares.");
    } else if (resultado < 10000) {
        alert("Condición Baja\n" +
            "El valor actual del vehiculo es: $" + resultado + " dólares.");
    } else {
        alert("Sin Condición\n" +
            "El valor actual del vehiculo es: $" + resultado + " dólares.");
    }
}

function Operacion(posicion) {
    let precio = parseFloat(tabla.rows[posicion].cells[2].innerHTML);
    let totalPorcentaje = ((year - parseFloat(tabla.rows[posicion].cells[3].innerHTML)) * parseFloat(tabla.rows[posicion].cells[4].innerHTML)) / 100;
    return precio - (precio * (totalPorcentaje));
}

function contarcondiciones() {
    var altos = 0;
    var medios = 0;
    var bajos = 0;
    var sincondicion = 0;

    for (var i = 1; tabla.rows[i]; i++) {

        let cantidadannos = year - parseFloat(tabla.rows[i].cells[3].innerHTML);
        if (Operacion(i) >= 30000  && cantidadannos > 0 ) {
            altos += 1;
        } else if (Operacion(i) >= 10000 && Operacion(i) < 30000) {
            medios += 1;
        } else if (Operacion(i) < 10000) {
            bajos=+1
        } else {
            sincondicion += 1;
        }
    }
    document.getElementById("Condiciones").value =
        "Hay un total de total " + altos + " automóviles en condición alta." + "\n" +
        "Hay un total de total " + medios + " automóviles en condición media." + "\n" +
        "Hay un total de total " + bajos + " automóviles en condición baja." + "\n" +
        "Hay un total de total " + sincondicion + " automóviles sin condición." + "\n";
}