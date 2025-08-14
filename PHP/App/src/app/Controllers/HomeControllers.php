<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;

class HomeControllers
{
    public function index(): string
    {
        return (new View('index'))->render();
    }

    public function upload()
    {
        echo '<pre>';
        var_dump($_FILES);

        var_dump(pathinfo($_FILES["receipt"]["name"]));
        echo '</pre>';
    }
}