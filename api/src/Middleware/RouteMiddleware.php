<?php

namespace Middleware;

use Http\Response;

class RouteMiddleware extends Middleware {
    public function run() {
        $allowed_routes = get_allowed_routes();
        $uri = $_SERVER['REQUEST_URI'];

        if (count($allowed_routes) > 0 && !in_array($uri, $allowed_routes)) {
            $response = new Response(403, 'Forbidden', [], 'Access denied.');
            return $response;
        }

        return null;
    }
}