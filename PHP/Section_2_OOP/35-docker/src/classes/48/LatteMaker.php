<?php

namespace folderName;

class LatteMaker extends CoffeeMaker
{
    public function makeLatte()
    {
        echo static::class . ' is making Latte' . PHP_EOL;
    }
}