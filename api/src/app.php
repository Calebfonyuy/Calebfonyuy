<?php

class App {

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
        $this->run_middleware();
        $this->run_controller();
    }
}

return new App();