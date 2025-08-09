<?php

namespace folderName;

trait CappuccinoTrait
{

    use LatteTrait;
    public function makeCappuccino()
    {
        echo static::class . ' is making cappuccino' . PHP_EOL;
    }
}