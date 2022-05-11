<?php


require_once 'bd.php';  //incluyo la cadena de conexion PHP

//recibimos la data del formulario
$nombre =$_POST['nombre'];
$apellidos =$_POST['apellidos'];
$email =$_POST['email'];
$telefono =$_POST['telefono'];
$Password =$_POST['pass'];
//--------------------------------------------------------------

// hacer el proceso de request - response 
$sql = 'INSERT INTO paciente(Nombre,Apellido,email,telefono,pass) VALUES (?,?,?,?,?)';
$sentencia = $pdo->prepare($sql);  //prepara consulta 
$sentencia->execute([$nombre,$apellidos,$email,$telefono,$password]); //ejecuta la sentencia sql

header('Location:../Pacientes.php');




