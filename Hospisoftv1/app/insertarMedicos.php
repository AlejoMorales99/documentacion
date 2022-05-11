<?php


require_once 'bd.php';  //incluyo la cadena de conexion PHP

//recibimos la data del formulario
$nombre =$_POST['nombre'];
$apellidos =$_POST['apellidos'];
$email =$_POST['email'];
$especialidad =$_POST['especialidad'];



//--------------------------------------------------------------

// hacer el proceso de request - response 
$sql = 'INSERT INTO medico(nombre_medico,apellido_medico,email,especialidad) VALUES (?,?,?,?)';
$sentencia = $pdo->prepare($sql);  //prepara consulta 
$sentencia->execute([$nombre,$apellidos,$email,$especialidad]); //ejecuta la sentencia sql

header('Location:../Medico.php');




