<?php

declare(strict_types=1);

namespace App\Controllers;
class HomeControllers
{
    public function index(): string
    {
        return <<<FORM
                   
               FORM;
    }

    public function upload()
    {
        echo '<pre>';
        var_dump($_FILES);

        var_dump(pathinfo($_FILES["receipt"]["name"]));
        echo '</pre>';
    }
}