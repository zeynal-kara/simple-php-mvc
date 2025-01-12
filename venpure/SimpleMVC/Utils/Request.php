<?php

namespace SimpleMVC\Utils;

class Request
{
    protected array $headers = [];
    protected array $params = [];
    protected array $body = [];

    public function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function getUrl()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function getParameter($name)
    {
        return $_GET[$name] ?? $_POST[$name] ?? null;
    }

    public function getHeader($name)
    {
        return $this->headers[$name] ?? null;
    }
}
