<?php

namespace Framework;
use Framework\Route;
use Framework\Response;
use Framework\Request;

class Router
{
public array $routes;

public function __construct(){
    $this->routes = [];
}
public function addRoute(string $method, string $path, callable $callback): void{
    $this->routes[] = new Route($method, $path, $callback);
}
    public function dispatch(Request $request): Response
    {
        foreach ($this->routes as $route) {
            if ($route->matches($request->method, $request->path)) {
                return call_user_func($route->callback);
            }
        }
        return new Response(404, "Not Found");
    }
}