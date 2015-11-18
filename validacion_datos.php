<?php 

$usuarioValido = 'test';
$passwordValido = 'test';
$usuarioEnviado = $_GET['usuario'];
$passwordEnviado = $_GET['password'];
$resultados = array();
$resultados['hora'] = time();
$resultados['generador'] = 'generado en revolucion.mobi';
if( $usuarioEnviado == $usuarioValido && $passwordEnviado == $passwordValido ){
	$resultados['respuesta'] = 'Validacion Correcta';
	$resultados['validacion'] = 'ok';
}else{
$resultados['respuesta'] = 'Usuario y password incorrectos';
$resultados['validacion'] = 'error';
}
$resultadosJson = json_encode($resultados);
echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';
?>