<?php 
namespace App\Core;

class Controller
{
    public function view($view, $params = [])
    {
        return Router::parseRender($view, $params);
    }
}