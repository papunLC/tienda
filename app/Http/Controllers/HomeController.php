<?php

namespace App\Http\Controllers;

class HomeController
{
    function index()
    {
        echo '<p> Implementar la logic del controlador Home Metodo Index </p>';
        return new \App\Http\Response('home');
    }
    
}
