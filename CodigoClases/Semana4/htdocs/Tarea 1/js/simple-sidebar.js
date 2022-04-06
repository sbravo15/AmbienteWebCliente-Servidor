function ConsultarHacienda()
{

    let identificacion = document.getElementById("txtIdentificacion").value
    var url ='https://api.hacienda.go.cr/fe/ae?identificacion='+identificacion;
	
	if(identificacion.trim() != "" && identificacion.length >= 9)
	{
		$("#txtNombre").val("");
		$("#txtMoroso").val("");
		$("#txtActividad").val("");
		
	    $.ajax({
			type:'GET',
			url:url,
			dataType:'json',
			success: function(response){
			   
				$("#txtNombre").val(response.nombre);
				$("#txtMoroso").val(response.situacion.moroso);
				
				var lista = "";
				response.actividades.forEach(function(act) {
					lista += act.descripcion + '\n';
				});
				$("#txtActividad").val(lista);
				
				/*
				let listaActividades = "";
				for(let i = 0; i < response.actividades.length; i++){
				   listaActividades = listaActividades.concat(response.actividades[i].descripcion+ ", ");
				}            
				$("#txtActividad").val(listaActividades);
				*/
			},
			error: function(response){
				alert("Se presentó un error: "+response.responseJSON.status);
			}
		});
	}
}