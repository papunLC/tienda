<?php

namespace App\Http;

class Auto
{
    public $color;
    public $modelo;
    public $año;
    public $funcional;

    function arrancar() 
    {
        echo 'el automovil esta arrancado';
    }
    function mostrar ()
    {
        echo '<p>el color del auto es: ' . $this ->color.'</p>';
        echo '<p>el modelo del auto es: ' . $this ->modelo.'</p>';
        echo '<p>el año del auto es: ' . $this ->año.'</p>';
        echo '<p>el auto es funcional: ' . $this ->funcional.'</p>';
        echo '<hr>';
        
    }
}