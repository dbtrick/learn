<?php

declare(strict_types=1);

namespace folderName;

class Transaction
{

    /**
     * Static Properties
     *- values are shared across the objects
     */

    public static int $count = 0;

    public function __construct(
       public float $amount,
        public string $description,
    ) {

        self::$count++;

    }

    public function process()
    {
        echo 'Processing...';
    }

}