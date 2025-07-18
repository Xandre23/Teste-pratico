<?php

namespace App\App;

class Router
{
    private array $routes = [];

    public function get(string $path, callable $callback)
    {
        $this->routes['GET'][$path] = $callback;
    }

    public function post(string $path, callable $callback)
    {
        $this->routes['POST'][$path] = $callback;
    }

    public function loadRoutes()
    {
        $router = $this; 
    require_once __DIR__ . '/routes.php';
    }

    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if (isset($this->routes[$method][$path])) {
            call_user_func($this->routes[$method][$path]);
        } else {
            http_response_code(404);
            echo "Página não encontrada.";
            
        }
    }
}
