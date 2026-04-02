<?php

session_start();

require_once __DIR__ . '/../config/config.php';

// Autoload
spl_autoload_register(function ($class) {
    $paths = [
        BASE_PATH . '/app/core/',
        BASE_PATH . '/app/controllers/',
        BASE_PATH . '/app/models/',
        BASE_PATH . '/app/services/'
    ];

    foreach ($paths as $path) {
        if (file_exists($path . $class . '.php')) {
            require_once $path . $class . '.php';
        }
    }
});

// Helpers
require_once BASE_PATH . '/app/helpers/helpers.php';

// Routing
$controllerName = $_GET['controller'] ?? 'auth';
$action = $_GET['action'] ?? 'login';

$controllerClass = ucfirst($controllerName) . 'Controller';

if (!class_exists($controllerClass)) {
    die("Controller not found");
}

$controller = new $controllerClass();

if (!method_exists($controller, $action)) {
    die("Method not found");
}

$controller->$action();