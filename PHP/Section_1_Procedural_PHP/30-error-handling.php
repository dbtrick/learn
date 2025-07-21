<?php

// Error Handling

//error_reporting(E_ALL); // report all errors

// display_errors(in php.ini) should be turn-off in prod so that it does not display sensitive data on users

function errorHandler(
    int $type,
    string $msg,
    ?string $file = null,
    ?int $line = null
) {
    echo $type . ': ' . $msg . ' in ' . $file . ' on line ' . $line;

    exit();
}

error_reporting(E_ALL);

set_error_handler('errorHandler');

echo x;