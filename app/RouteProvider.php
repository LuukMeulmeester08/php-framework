<?php

namespace App;

use App\controllers\TaskController;
use App\controllers\HomeController;
use Framework\RouteProviderInterface;
use Framework\Router;

class RouteProvider implements RouteProviderInterface
{

    public function register(Router $router): void
    {
        $router->addRoute('GET', '/', [new HomeController(), 'index']);
        $router->addRoute('GET', '/about', [new HomeController(), 'about']);
        $router->addRoute('GET', '/TaskList', [new TaskController(), 'index']);
        $router->addRoute('GET', '/AddTask', [new TaskController(), 'about']);

    }
}