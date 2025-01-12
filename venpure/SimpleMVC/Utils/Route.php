<?php

namespace SimpleMVC\Utils;

use SimpleMVC\Core\Middleware;

class Route
{
    protected array $middleware = [];
    private string $controller;
    private string $action;
    function __construct(protected string $pattern,
                         protected $callable,
                         protected string $method)
    {
        $this->controller = $this->callable[0];
        $this->action = $this->callable[1];
    }

    public function addMiddleware(Middleware $middleware): Route
    {
        $this->middleware[] = $middleware;

        return $this;
    }

    public function handle()
    {
        $request = new Request();
        $controller = new $this->controller();

        $next = fn($request) => $controller->{$this->action}($request);

        foreach (array_reverse($this->middleware) as $middleware) {
            $next = fn($request) => (new $middleware)->process($request, $next);
        }
        return $next($request)->send();
    }

}