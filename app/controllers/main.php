<?php

namespace bng\Controllers;

class Main
{
    public function index($id)
    {
        echo "Estou dentro do controlador Main - index"; 
    
    }

    public function test()
    {
        die('aqui no teste');
    }
}