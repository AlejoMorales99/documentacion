<?php


require_once "bd.php";  //incluyo la cadena de conexion PHP

//recibimos la data del formulario
$id =$_GET["id"];
//--------------------------------------------------------------

// hacer el proceso de request - response 
$sql = "DELETE FROM medico WHERE id_medico={$id}";
$sentencia = $pdo->prepare($sql);  //prepara consulta 
$sentencia->execute(); //ejecuta la sentencia sql


header('Location:../medico.php');

