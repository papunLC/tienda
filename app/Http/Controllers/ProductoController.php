<?php

namespace App\Http\Controllers;

class ProductoController
{
    function index()
    {
        echo '<p> listar productos</p>';
        return new \App\Http\Response('producto');
    }
    function crear()
    {
        echo '<p> crear producto</p>';
        return new \App\Http\Response('nuevoProducto');
    }
    function editar()
    {
        echo '<p> editar producto</p>';
        return new \App\Http\Response('editarProducto');
    }
    function eliminar()
    {
        echo '<p> eliminar producto</p>';
        return new \App\Http\Response('eliminarProducto');
    }
}
