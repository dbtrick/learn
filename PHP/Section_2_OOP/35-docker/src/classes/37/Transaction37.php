<?php

// the object must be on separate file(index.php)
// use type hint and strict types

declare(strict_types=1);
class Transaction37
{

    private ?Customer $customer = null;

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function __construct(
        private float $amount,
        private string $description
    ) {

    }


}
