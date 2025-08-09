<?php

namespace folderName;

trait LatteTrait
{
    protected string $milkType = 'whole-milk';
    public function makeLatte()
    {
        echo static::class . ' is making Latte with ' . $this->milkType .  PHP_EOL;
    }

    public function setMilkType(string $milkType): static
    {
        $this->milkType = $milkType;

        return $this;
    }
}