<?php

namespace Middleware;

use Http\Response;

$middleware_registry = [
    'RouteMiddleware' => 'Middleware\RouteMiddleware',
    'RequestValidator' => 'Controllers\RequestValidator'
];

class MiddlewareRunner {

    public static function runAll(){
        foreach ($middleware_registry as $middleware) {
            self::run(new $middleware);
        }
    }

    private static function run($middleware) {
        $response = $middleware->run();

        if ($response instanceof Response) {
            $response->send();
            exit;
        }
    }
}