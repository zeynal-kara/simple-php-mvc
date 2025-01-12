<?php

namespace SimpleMVC\Utils;

class Response
{
    protected int $statusCode = 200;
    protected array $headers = [];
    protected string $body = '';
    protected array $cookies = [];

    public function setStatusCode($code): void
    {
        $this->statusCode = $code;
    }

    public function setHeader($name, $value): void
    {
        $this->headers[$name] = $value;
    }

    public function setBody($body): void
    {
        $this->body = $body;
    }

    public function send(): void
    {
        http_response_code($this->statusCode);
        foreach ($this->headers as $name => $value) {
            header("{$name}: {$value}");
        }

        echo $this->body;
        exit();
    }

    public function redirect($url)
    {
        header("Location: {$url}");
        exit();
    }

    public function json($data, int $status_code = 200): void
    {
        $this->statusCode = $status_code;
        $this->setHeader('Content-Type', 'application/json');
        $this->setBody(json_encode($data));
    }

}
