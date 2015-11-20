<?php

/* Define los valores que seran evaluados, en este ejemplo son valores estaticos,
en una verdadera aplicacion generalmente son dinamicos a partir de una base de datos */

$usuarioValido = "test";
$passwordValido = "test";

/* Extrae los valores enviados desde la aplicacion movil */
$usuarioEnviado = $_GET['usuario'];
$passwordEnviado = $_GET['password'];

/* crea un array con datos arbitrarios que seran enviados de vuelta a la aplicacion */
$resultados = array();
/* verifica que el usuario y password concuerden correctamente */
/*if($usuarioEnviado == $usuarioValido  && $passwordEnviado == $passwordValido ){
	/*esta informacion se envia solo si la validacion es correcta *
	$resultados["mensaje"] = "Validacion Correcta";
}else{
	/*esta informacion se envia si la validacion falla *
	$resultados["mensaje"] = "Usuario y password incorrectos";
}
*/
/*convierte los resultados a formato json*/
$resultados["mensaje"] =$usuarioEnviado;
$resultadosJson = json_encode($resultados);
/*muestra el resultado en un formato que no da problemas de seguridad en browsers */
echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';

?>