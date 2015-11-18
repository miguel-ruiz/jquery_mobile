$( document ).ready(function() {
 $('#formulario').submit(function() { 
	// recolecta los valores que inserto el usuario
	var datosUsuario = $("#nombredeusuario").val()
	var datosPassword = $("#clave").val()
	
  	//archivoValidacion = "http://www.grupomedios.com/intranet/validacion_datos.php?jsoncallback=?"
	archivoValidacion = "http://revolucion.mobi/ejemplos/phonegap/envioFormulario/validacion_de_datos.php?jsoncallback=?"
	$.getJSON( archivoValidacion, { usuario:datosUsuario ,password:datosPassword})
	.done(function(respuestaServer) {
		
		alert(respuestaServer.mensaje + "\nGenerado en: " + respuestaServer.hora + "\n" +respuestaServer.generador)
		
		if(respuestaServer.validacion == "ok"){
		  
		 	/// si la validacion es correcta, muestra la pantalla "home"
			$.mobile.changePage("#home")
		  
		}else{
		  
		  /// ejecutar una conducta cuando la validacion falla
		}
  
	})
	return false;
})
});