<?php

namespace SimpleMVC\Core;
use SimpleMVC\Utils\HttpHandler;
use SimpleMVC\Utils\Response;

class Controller
{
    protected string $view_dir = APP_ROOT . "Views/";
    protected HttpHandler $http_handler;

    public function __construct()
    {
        $this->http_handler = new HttpHandler();
    }

    protected function setViewDir(string $view_dir): void
    {
        $this->view_dir = $view_dir;
    }

    protected function render($view, $data = []): Response
    {
        extract($data);
        ob_start();
        include $this->view_dir . DIRECTORY_SEPARATOR . "$view.php";
        $body = ob_get_clean();
        $response = new Response();
        $response->setBody($body);
        return $response;
    }
}