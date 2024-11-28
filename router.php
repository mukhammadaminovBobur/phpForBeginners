<?php
$uri = $_SERVER['REQUEST_URI'];

$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/notes" => "controllers/notes.php",
    "/note" => "controllers/note.php",
    "/contact" => "controllers/contact.php"
];

function routeToController($uri, $routes) {
    $uri = parse_url($uri, PHP_URL_PATH);
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
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

