<?php

declare(strict_types=1);

namespace folderName;

require_once '../../classes/57/Exceptions/RouteNotFoundException.php';

use \folderName\Exceptions\RouteNotFoundException;

class Router
{
    private array $routes;
    public function register(string $route, callable|array $action): self
    {
        $this->routes[$route] = $action;

        return $this;
    }

   /* public function resolve(string $requestUri)
    {
        $route = explode('?', $requestUri)[0];
        $action = $this->routes[$route] ?? null;

        if (! $action) {
            throw new RouteNotFoundException();
        }

       return call_user_func($action);
    }*/

   public function resolve(string $requestUri)
    {
        // Get only the path (ignore query strings)
        $route = explode('?', $requestUri)[0];

        // Remove trailing slash except for root
        $route = rtrim($route, '/');
        if ($route === '') {
            $route = '/';
        }

        $action = $this->routes[$route] ?? null;

        if (! $action) {
            throw new RouteNotFoundException("Route not found: $route");
        }

        return call_user_func($action);
    }





}