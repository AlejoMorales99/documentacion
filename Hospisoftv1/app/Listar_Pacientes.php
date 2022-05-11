<?php


 require_once 'bd.php';  //incluyo la cadena de conexion PHP

 // hacer el proceso de request - response 

 $sql = 'SELECT * FROM paciente';
 $sentencia = $pdo->prepare($sql);  //prepara consulta 
 
 $sentencia->execute(); //ejecuta la sentencia sql
 $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ); //almacena el resultado en formato OBJETO
/*echo '<pre>';
var_dump($resultado);
echo '</pre>';*/ 