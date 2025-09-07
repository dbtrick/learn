<?php

declare(strict_types=1);

namespace App\Classes;

class Invoices
{
    public function index(): string
    {
        return 'Invoices Page';
    }

    public function create(): string
    {
        return 'Create Invoice';
    }
}