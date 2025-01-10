<?php

class App {
    function cors() {
    
        // Allow from known origins
        if (isset($_SERVER['HTTP_ORIGIN']) && in_array($_SERVER['HTTP_ORIGIN'], get_allowed_origins())) {
            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            header('Access-Control-Allow-Credentials: true');
            header('Access-Control-Max-Age: 86400');    // cache for 1 day
        }
        
        // Access-Control headers are received during OPTIONS requests
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
            
            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
                // may also be using PUT, PATCH, HEAD etc
                header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
            
            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
                header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
        
            exit(0);
        }
    }

    private function run_middleware(){
        $runner = new Middleware\Runner();
        $runner->runAll();
    }

    private function run_controller(){
        $routes = require_once __DIR__ . '/routes/api.php';
        $request = Http\Request::fromGlobals();
        $method = $request->method;
        $uri = $request->uri;

        foreach ($routes as $route => $routeConfig) {
            if ($route === $uri && $routeConfig['method'] === $method) {
                $controller = new $routeConfig['controller']();
                $action = $routeConfig['action'];
                $response = $controller->$action($request);
                $response->send();
                return;
            }
        }

        $response = new Http\Response(404, 'Not Found', [], 'Route not found.');
        $response->send();
    }

    public function run(){
        $this->cors();
        $this->run_middleware();
        $this->run_controller();
    }
}

return new App();