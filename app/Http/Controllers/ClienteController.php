<?php

namespace App\Http\Controllers;

class ClienteController
{
    function index()
    {
        echo '<p> listar clientes</p>';
        return new \App\Http\Response('cliente');
    }
    function crear()
    {
        echo '<p> crear clientes</p>';
        return new \App\Http\Response('nuevoCliente');
    }
    function editar()
    {
        echo '<p> editar clientes</p>';
        return new \App\Http\Response('editarCliente');
    }
    function eliminar()
    {
        echo '<p> eliminar clientes</p>';
        return new \App\Http\Response('eliminarCliente');
    }
}
