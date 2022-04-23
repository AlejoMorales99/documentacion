<?php

    $frutas = ["papaya",9,true,"mango",3.45];


    var_dump($frutas);
    echo "<hr>";
    print_r($frutas);



    $equipos = [

        "n1"=>"deportivo cali",
        "n2"=>89,
        "c4"=>8.67,
        "estado"=>true
    ];

    echo "<br>";

    echo "<pre>";
    var_dump($equipos);
    echo "</pre>";


    echo "<br>";
    echo $equipos["c4"];

    echo " <hr> <br>";

    foreach($equipos as $equipo){
        echo $equipo."<br>";
    }



?>