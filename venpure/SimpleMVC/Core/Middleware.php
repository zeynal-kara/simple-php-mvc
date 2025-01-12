<?php

namespace SimpleMVC\Core;

use SimpleMVC\Utils\HttpHandler;
use SimpleMVC\Utils\Response;

abstract class Middleware
{
    protected HttpHandler $httpHandler;
    function __construct()
    {
        $this->httpHandler = new HttpHandler();
    }
    abstract function process($req, $next): Response;
}