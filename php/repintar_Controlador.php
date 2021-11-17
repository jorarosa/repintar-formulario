<?php

// recepción de parámetros
$nombre = $_REQUEST['nombre'];
$siglasPais = $_REQUEST['pais'];
if (isset($_REQUEST['semaforo']))
  $semaforo = $_REQUEST['semaforo'];
else
  $semaforo = '';
    
if (isset($_REQUEST['lectura']))
  $deporte = $_REQUEST['lectura'];  
if (isset($_REQUEST['deporte']))
  $deporte = $_REQUEST['deporte'];
if (isset($_REQUEST['viajes']))
  $deporte = $_REQUEST['viajes'];
if (isset($_REQUEST['aficiones']))
  $aficiones = $_REQUEST['aficiones'];
else
  $aficiones = '';
    
$comentarios = $_REQUEST['comentarios'];

// obtención de datos, sea desde el modelo (BD), o sean datos estáticos
$arrayPaises = ["PT" => "Portugal", 
		"ES" => "España", 
		"AN" => "Andorra"];

$arraySemaforo = ["V" => "Verde",
			"N" => "Naranja",
			"R" => "Rojo"];

$arrayAficiones = ["L" => "Lectura",
			"D" => "Deporte",
			"V" => "Viajes"];			

// invocación a la vista paśandole los datos existentes aquí
include 'repintar_Vista.php';

?>
