<?php
 //conexion a la BD de la forma clásica

 //usuario y  clave de mysql
 $usuario = 'root';
 $password = '';

try{
  //creamos el conector instanciando la clase PDO
  $pdo = new PDO('mysql:host=localhost;dbname=hospisoft',$usuario,$password);   //usamos la clase PDO DE PHP con el conector MYSQL
 /*  var_dump($pdo);
  echo '<br>';
  echo 'conexion exitosa'; */
}catch(PDOException $error){
    echo 'ha ocurrido un error en la conexion'; //mensaje de error para usuario normal
   // echo 'el error es:'.$error->getMessage();   //mensaje de error para programador
}

