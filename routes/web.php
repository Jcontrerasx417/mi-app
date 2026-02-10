<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/php-basico', function () {
    
    echo "<h1>  VARIABLES. . .   </h1>";

    $nombre = "Juan";

    $apellido = "Contreras";

    $nombre_completo = $nombre . $apellido;
    $age = rand(10,25);
    $height = 1.73;
    $isLogin = (bool) rand(0,1);
    echo $nombre_completo;


    echo "<br>**************** ESTRUCTURA DE DATOS*************<br>";
    $message = "<br><br>Soy $nombre_completo tengo $age años!!!"."<br>";
    echo $message;

    if ($age <18 ){
        $message = $message . "soy menor de edad"."<br>";
    } else if ($age >50){
        $message .= "eres adulto mayor"."<br>";
    } else {
        $message .= "eres adulto"."<br>";
    }
    echo $message; 

    $message .=" " .($isLogin ? "Estas logueado" : "no estas logueado".".<br>" );

    echo "<br>***************** FUNCIONES **************";

    echo printuser($nombre_completo, $age);

    $productsNames= ["computador", "Teclado", 25, true , false];
    $teclado = [
        "name" => "teclado hp",
        "marca" => "HP",
        "precio" =>20000,
        "distribuciones" => [
            "latino",
            "mexico",
            "americano"
        ]

    ];
    $teclado["marca"] = "LG";
    echo $teclado["name"];

    foreach ($productsNames as $item){
        echo$item;
    }


    
});

Function printUser(string $nombre , int $age): string{
    return "<br>$nombre tiene $age.<br>";
}
