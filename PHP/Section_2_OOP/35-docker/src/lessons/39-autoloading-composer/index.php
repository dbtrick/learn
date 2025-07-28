<?php

/**
 * Autoloading
 */

//require_once '../../classes/38/Paddle/Transaction.php';


/* spl_autoload_register(function ($class) {
    $path = __DIR__ . '/../../classes/38/' . str_replace('\\', '/', $class);

    require $path;
   var_dump($path);
});

use folderName\Paddle\Transaction;

$paddleTransaction = new Transaction();


var_dump($paddleTransaction);*/

echo '<br>';

/**
 * Composer
 */

use folderName\Paddle\Transaction;

require __DIR__ . '/../../vendor/autoload.php';

use Ramsey\Uuid\Uuid;

echo Uuid::uuid4()->toString();



//use "dump-autoload -o" in production env
// if the class is not found in the array it will wall back to psr-4
// Don't commit the vendor folder on git(add the vendor folder into the git ignore file)


