<?php

require __DIR__ . '/../vendor/autoload.php';

//instanciar

$miAuto = new App\Http\Auto;
$tuAuto = new \App\Http\Auto;
$suAuto = new \App\Http\Auto;

//asignando propiedades
$miAuto ->color= "blanco";
$miAuto->modelo= "camioneta";
$miAuto->año= 1999;
$miAuto->funcional= false;

$tuAuto ->color= "rojo";
$tuAuto->modelo= "automovil";
$tuAuto->año= 2015;
$tuAuto->funcional= true;

//llamar funciones
$miAuto->mostrar();
$tuAuto->mostrar();
$suAuto->mostrar();
