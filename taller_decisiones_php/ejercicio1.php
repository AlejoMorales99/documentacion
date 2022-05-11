<?php

$metros = $_POST['metros'];
$estrato = $_POST['estrato'];
$resultado = 0;

switch ($estrato) {
    case 1:
        $resultado = $metros*5000;
        echo "El total a pagar es ".$resultado;
        break;
    case 2:
        $resultado = $metros*6500;
        echo "El total a pagar es ".$resultado;
        break;
    case 3:
        $resultado = $metros*7000;
        echo "El total a pagar es ".$resultado;
        break;

    case 4:
        $resultado = $metros*8000;
        echo "El total a pagar es ".$resultado;
        break;

    case 5:
        $resultado = $metros*9200;
        echo "El total a pagar es ".$resultado;
        break;

    default:
        echo "Ingrese un estrato valido";
        break;
}

?>