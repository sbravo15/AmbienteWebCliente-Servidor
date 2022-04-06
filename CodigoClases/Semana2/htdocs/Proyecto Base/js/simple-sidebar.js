function Saludar()
{
    document.getElementById("pSaludo").innerHTML = "Prueba con JS";
    $("#pSaludo2").text("Prueba con JQuery");

    document.getElementById("txtEstudiante").value = "Prueba con JS";
    $("#txtEstudiante2").val("Prueba con JQuery");

    let numero1 = 10;    
    let numero2 = 20;  
    let numero3 = "20";
    let n4 = null;

    console.log(n4);

    try
    {
        $("#lblResultado").text(numero1 + numero2);
        console.log(numero1 + numero2 + numero3);
    }
    catch(error)
    {
        console.log("Esto no está sirviendo");
    }

    // Uncaught = Error de programación no administrado
    // NaN = El resultado no es un número
    // Undefined = Valor inicial de una variable
}

function Despedir()
{
    alert("Hasta Luego");
}