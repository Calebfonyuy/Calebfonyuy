<?php

namespace Middleware;

use Http\Response;

class OriginMiddleware extends Middleware {
    public function run() {
        $allowed_origin = get_allowed_origins();

        if (isset($_SERVER['HTTP_ORIGIN'])) {
            $origin = parse_url($_SERVER['HTTP_ORIGIN'], PHP_URL_HOST);
            if (count($allowed_origin)> 0 && !in_array($origin, $allowed_origin)) {
                $response = new Response(403, 'Forbidden', [], 'Access denied.');
                return $response;
            }
            return null;
        } else {
            $response = new Response(400, 'Bad Request', [], 'Origin header not found.');
            return $response;
        }
    }
}