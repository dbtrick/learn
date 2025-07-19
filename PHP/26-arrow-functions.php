<?php

// variable functions
function sum(int|float $a, int|float $b): int|float {
    return $a + $b;
}

$x = 'sum';

if (is_callable($x)) {
    echo $x(1, 2);
} else {
    echo 'Not Callable';
}

