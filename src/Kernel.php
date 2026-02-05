<?php

namespace Framework;

use Framework\Request;
use Framework\Response;
use Framework\Router;
use Framework\RouteProviderInterface;

class Kernel
{
    private Router $router;
    private $routeCallable;


public function __construct(Router $router, callable $routeCallable){
 $this->router = $router;
 $this->routeCallable = $routeCallable;
}
public function handle(Request $request): Response{
     call_user_func($this->routeCallable, $this->router);
     return $this->router->dispatch($request);
}
}