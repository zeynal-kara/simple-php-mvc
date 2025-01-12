<?php


namespace App\Controllers;

use SimpleMVC\Core\Controller;
use SimpleMVC\Utils\ErrorHandler;

class ErrorController extends Controller implements ErrorHandler
{
    function handler(\Exception $exception): void
    {
        $response = $this->render("error", ["exception" => $exception]);
        $response->setStatusCode(404);
        $response->send();
    }
}