<?php 
namespace App\Core;

class Controller
{
    public function render($view, $params = []): string
    {
        return Router::parseRender($view, $params);
    }
}