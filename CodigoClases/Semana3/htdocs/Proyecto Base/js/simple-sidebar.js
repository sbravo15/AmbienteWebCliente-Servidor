function Saludar() {
  document.getElementById("pSaludo").innerHTML = "Prueba con JS";
  $("#pSaludo2").text("Prueba con JQuery");

  document.getElementById("txtEstudiante").value = "Prueba con JS";
  $("#txtEstudiante2").val("Prueba con JQuery");

  let numero1 = 10;
  let numero2 = 20;
  let numero3 = "20";
  let n4 = null;

  console.log(n4);

  try {
    $("#lblResultado").text(numero1 + numero2);
    console.log(numero1 + numero2 + numero3);
  } catch (error) {
    console.log("Esto no está sirviendo");
  }

  // Uncaught = Error de programación no administrado
  // NaN = El resultado no es un número
  // Undefined = Valor inicial de una variable

  TraerTipoCambio();
}

function Despedir() {
  alert("Hasta Luego");
}

function TraerTipoCambio()
{
    //Ir a un Servicio Expuesto en Internet
    $.ajax({
        type: 'GET',
        url: "https://api.hacienda.go.cr/indicadores/tc/dolar3",
        dataType: 'json',
        success: function(response){
            console.log(response.compra.valor);
            console.log(response.venta.valor);
        },
        error: function(response)
        {
            console.log("Se presentó un error:" + response.responseJSON.status);
        }
    });

    /*
    var request = new XMLHttpRequest();
    request.open("GET","https://api.hacienda.go.cr/indicadores/tc/dolar");
    request.send();
    request.onload = function()
    {
        if(request.status == 200){
            var respuesta = JSON.parse(request.response);
            console.log(respuesta.compra.valor);
            console.log(respuesta.venta.valor);
        }
        else{
            console.log("Se presentó un error");
        }
    }
    */

}