<?php
$routes = require base_path("routes.php");


$uri = $_SERVER['REQUEST_URI'];


function routeToController($uri, $routes) {
    $uri = parse_url($uri, PHP_URL_PATH);
//    dd($uri);

    if (array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    } else {
        abort();
    }
}
function abort($code = 404) {
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

routeToController($uri, $routes);

