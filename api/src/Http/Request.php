<?php

namespace Http;

class Request {
    public $method;
    public $uri;
    public $headers;
    public $body;

    public function __construct(string $method, string $uri, array $headers, array|null $body) {
        $this->method = $method;
        $this->uri = $uri;
        $this->headers = $headers;
        $this->body = $body;
    }

    public static function fromGlobals() {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = get_current_route();
        $headers = getallheaders();
        $body = json_decode(file_get_contents('php://input'), true);

        return new Request($method, $uri, $headers, $body);
    }

    public function getHeader($name) {
        return $this->headers[$name] ?? null;
    }

    public function get($name) {
        return $this->body[$name] ?? null;
    }
}