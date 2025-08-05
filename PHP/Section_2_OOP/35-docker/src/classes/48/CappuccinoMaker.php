<?php

namespace folderName;

class CappuccinoMaker extends CoffeeMaker
{
    public function makeCappuccino()
    {
        echo static::class . ' is making cappuccino' . PHP_EOL;
    }
}