<?php

namespace Middleware;

use Http\Response;

class Runner {

    private static $MIDDLEWARE_REGISTRY = [
        'RouteMiddleware' => 'Middleware\RouteMiddleware',
        'OriginMiddleware' => 'Middleware\OriginMiddleware',
    ];

    public static function runAll(){
        foreach (self::$MIDDLEWARE_REGISTRY as $middleware) {
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