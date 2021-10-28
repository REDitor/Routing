<?php
class PatternRouter {    
    public function route($uri) {
        // Path algorithm
        // pattern = /controller/method

        // set default controller/method
        $defaultcontroller = 'home';
        $defaultmethod = 'index';

        // read controller/method names from URL
        $explodedUri = explode('/', $uri);

        if(!isset($explodedUri[0]) || empty($explodedUri[0])) {
            $explodedUri[0] = $defaultcontroller;
        }
        $controllerName = $explodedUri[0] . "controller"; 

        if(!isset($explodedUri[1]) || empty($explodedUri[1])) {
            $explodedUri[1] = $defaultmethod;
        }
        $methodName = $explodedUri[1];

        // dynamically call relevant controller method
        require __DIR__ . '/controllers/' . $controllerName . '.php';
        $controllerObj = new $controllerName;
        $controllerObj->{$methodName}();
    }
}