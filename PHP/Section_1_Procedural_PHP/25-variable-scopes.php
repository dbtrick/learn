<?php

// variable scopes

// global scope variable
/*include '24-function-param.php';

echo $x;
echo '<br>';*/

// static variable

function getValue() {

    static $value = null;

    if ($value === null) {
        $value = someValue();
    }

    return $value;
}

function someValue() {

    return 42;

}

echo getValue();
