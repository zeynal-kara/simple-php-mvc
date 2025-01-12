<?php

namespace App\Middlewares;

use SimpleMVC\Core\Middleware;
use SimpleMVC\Utils\Response;

class LoginMiddleware extends Middleware
{

    function process($req, $next): Response
    {
        if (isset($_SESSION['user_id']))
        {
            header("Location:/admin-dashboard");
            exit();
        }

        return $next($req);
    }
}