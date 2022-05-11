<?php

$personas = $_POST['personas'];
$resultado = 0;


if ($personas <=200) {

    $resultado = $personas*14000;
    echo "el total a pagar es ".$resultado;

}else if($personas>200 && $personas<=300){

    $resultado = $personas*11000;
    echo "el total a pagar es ".$resultado;

}else if($personas>300){
    
    $resultado = $personas*9000;
    echo "el total a pagar es ".$resultado;

}


?>