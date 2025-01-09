<?php

namespace Http;

class Response {
    protected static $status = 200;
    protected static $statusText = 'OK';
    protected static $headers = [];
    protected static $body = '';

    public function __construct($status = 200, $statusText = 'OK', $headers = [], $body = '') {
        self::$status = $status;
        self::$statusText = $statusText;
        self::$headers = $headers;
        self::$body = $body;
    }

    public function json() {
        return json_encode(self::$body);
    }

    public function send() {
        http_response_code(self::$status);

        foreach (self::$headers as $key => $value) {
            header("$key: $value");
        }

        echo $this->json();
    }
}