<?php

namespace SimpleMVC\Core;

use SimpleMVC\Utils\ErrorHandler;
use SimpleMVC\Utils\Route;

class Router
{
    protected array $routes = [];
    protected $errorHandler;
    private function addRoute(string $pattern, $callable, $method): Route
    {
        $route_item = new Route($pattern, $callable, $method);
        $this->routes[$method][$pattern] = $route_item;
        return $route_item;
    }

    public function get(string $pattern, $callable): Route
    {
        return $this->addRoute($pattern, $callable, "GET");
    }

    public function post(string $pattern, $callable): Route
    {
        return $this->addRoute($pattern, $callable, "POST");
    }

    private function getRoute($method, $pattern): Route
    {
        return $this->routes[$method][$pattern];
    }

    /**
     * @throws \Exception
     */
    public function dispatch()
    {
        $pattern = strtok($_SERVER['REQUEST_URI'], '?');
        $method =  $_SERVER['REQUEST_METHOD'];

        if (array_key_exists($pattern, $this->routes[$method])) {
            $route_item = $this->getRoute($method, $pattern);
            $route_item->handle();
            return;
        }

        if (isset($this->errorHandler) &&
            is_object($this->errorHandler) &&
            method_exists($this->errorHandler, 'handler'))
        {
            $this->errorHandler->handler(new \Exception("No route found for URI: $pattern"));
            return;
        }

        throw new \Exception("No route found for URI: $pattern");
    }

    public function setErrorHandler(ErrorHandler $callable): void
    {
        $this->errorHandler = $callable;
    }
}