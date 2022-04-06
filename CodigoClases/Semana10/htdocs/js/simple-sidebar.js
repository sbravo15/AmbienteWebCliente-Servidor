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

/*
function Calcular(codigo)
{
  var table = document.getElementById("Datos");

  for(i = 1; table.rows[i]; i++)
  {
    if(codigo == table.rows[i].cells[0].innerHTML)
    {
       var Precio = parseFloat(table.rows[i].cells[1].innerHTML);
       var Obligatorio = Precio * parseFloat(table.rows[i].cells[2].innerHTML) / 100;
       var Opcional = Precio * parseFloat(table.rows[i].cells[3].innerHTML) / 100;
       alert(Precio + Obligatorio + Opcional);
    }
  }
}
  */

  var table = document.getElementById("Datos");
  function Calcular2(YOMISMO)
  {
    let indice = YOMISMO.parentNode.parentNode.rowIndex;
    alert(RealizarOperacion(indice));
  }

  function SumarTotales()
  {
    let sumador = 0;
    for(i = 1; table.rows[i]; i++)
    {  
      sumador += RealizarOperacion(i);
    }
    alert(sumador);
  }

  function RealizarOperacion(indice)
  {
    let Precio = parseFloat(table.rows[indice].cells[1].innerHTML);
    let Obligatorio = Precio * parseFloat(table.rows[indice].cells[2].innerHTML) / 100;
    let Opcional = Precio * parseFloat(table.rows[indice].cells[3].innerHTML) / 100;
    return Precio + Obligatorio + Opcional;
  }

function validateNumber(event) 
{
    var key = window.event ? event.keyCode : event.which;
   
    if ( key < 48 || key > 57 ) {
        return false;
    } else {
        return true;
    }
};