<?php

namespace SimpleMVC;

use SimpleMVC\Core\Router;
use SimpleMVC\Utils\Container;

class App extends Container
{
    protected Router $router;

    public function addRouter(Router $router): void
    {
        $this->router = $router;
    }

    public function getRouter(): Router
    {
        return $this->router;
    }

    public function run():void
    {
        $this->router->dispatch();
    }
}