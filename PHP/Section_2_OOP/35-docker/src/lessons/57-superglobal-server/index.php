<?php

/**
 * $_SERVER Superglobal
 * - use for routing
 */

require_once __DIR__ . '/../../vendor/autoload.php';
require_once '../../classes/57/Router.php';
require_once '../../classes/57/Exceptions/RouteNotFoundException.php';

use \folderName\Router;
use \folderName\Exceptions\RouteNotFoundException;

echo '<pre>';
print_r($_SERVER);
echo '</pre>';

$router = new folderName\Router();

/*$router->register('/57-superglobal-server/', function () {
    echo 'Home';
});

$router->register('/57-superglobal-server/invoices', function () {
    echo 'Invoices content here';
});*/

$router->register('/57-superglobal-server', function () {
    echo 'Home';
});

$router->register('/57-superglobal-server/invoices', function () {
    echo 'Invoices content here';
});



echo $router->resolve($_SERVER['REQUEST_URI']);
