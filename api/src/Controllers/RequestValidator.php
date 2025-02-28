<?php

namespace Controllers;

use Http\Request;
use Http\Response;

class RequestValidator{
    public static function validateRequest(){
        $request = Request::fromGlobals();
        $method = $request->method;
        $headers = $request->headers;
        $body = $request->body;

        if ($method !== 'POST') {
            $response = new Response(405, 'Method Not Allowed', [], 'Method not allowed.');
            return $response;
        }

        // This verification creates issues for no-cors mode. I will put it back once CORS is implemented.
        // if (!isset($headers['Content-Type']) || $headers['Content-Type'] !== 'application/json') {
        //     $response = new Response(400, 'Bad Request', [], 'Content-Type header is missing or invalid.');
        //     return $response;
        // }

        if (!isset($body['name']) || !isset($body['email']) || !isset($body['message'])) {
            $response = new Response(400, 'Bad Request', [], 'Request body is missing required fields.');
            return $response;
        }

        return $request;
    }
}