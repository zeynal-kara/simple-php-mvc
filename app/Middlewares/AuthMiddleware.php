<?php

namespace App\Middlewares;

use SimpleMVC\Core\Middleware;
use SimpleMVC\Utils\Response;

class AuthMiddleware extends Middleware
{

    function process($req, $next): Response
    {
        if (!isset($_SESSION['user_id']))
        {
            header("Location:/");
            exit();
        }
        return $next($req);
    }
}