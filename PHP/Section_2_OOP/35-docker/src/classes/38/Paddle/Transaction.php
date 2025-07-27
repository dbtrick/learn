<?php

declare(strict_types=1);

namespace folderName\Paddle;

class Transaction
{
    /*public function __construct()
    {
        var_dump(new CustomerProfile());
    }*/

    /**
     * "\" in \DateTime() tells php to load it on global space and not to the namespace
     * we can use "use Datetime" to load the DateTime()
     * use "\" when using php builtin function
     *
     */

    public function __construct()
    {
        var_dump(new \DateTime());
    }
}