<?php

class Router {
    private $routes = [];

    public function add($path, $file) {
        $this->routes[$path] = $file;
    }

    public function dispatch($uri) {
        $path = parse_url($uri, PHP_URL_PATH);
        $controllerFile = "UNKNOWN"; 

        var_dump($this->routes);

        if (isset($this->routes[$path])) {
            $controllerFile = $this->routes[$path];
            if (file_exists($controllerFile)) {
                require_once $controllerFile;
            } else {
                $this->error404($controllerFile);
            }
        } else {
            $this->error404($controllerFile);
        }
    }

    private function error404($controllerFile) {
        header("HTTP/1.0 404 Not Found");
        echo "404 Página no encontrada:".$controllerFile;
        exit;
    }
}
