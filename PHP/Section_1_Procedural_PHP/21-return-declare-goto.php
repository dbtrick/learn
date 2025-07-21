<?php

// return

/*
function sum(int $x, int $y) {
    $z = $x + $y;

    return $z;
}

$x = sum(5, 10);

echo $x;

echo '<br>';
echo 'Hello World!';

echo '<br>';

// declare (ticks, encoding, strick_types)

// - ticks
function onTick() {
    echo 'Hello World!<br>';
}

register_tick_function('onTick');

declare(ticks = 3);

$i = 0;
$length = 10;

while ($i < $length) {
    echo $i++ . '<br>';
}


// - encoding ( no use case aside from benchmarking of your code)
*/

// - goto

declare (strict_types = 1);

function sum( int $x, int $y)
{
    return $x + $y;
}


