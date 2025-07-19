<?php

/* Data Types & Type Casting

# 4 Scalar Types

# bool - true / false
$completed = true;

# int - 1, 2, 3, 4 (no decimal)
$score = 75;

# float - 0.1, 0.2, 0.3
$price = 0.99;

# string - "Feynman"
$greeting = 'Hello';

echo $completed . '<br/>';
echo $score . '<br/>';
echo $price . '<br/>';
echo $greeting . '<br/>';

echo gettype($score) . '<br/>';

# 4 Compound Types

# array
$companies = [1, 2, 3, 'a', 'b', 'c', true];
print_r($companies) . '<br/>';


# object
# callable
# iterable

# 2 Special Types

# null
# resource


// strict types
declare(strict_types=1);
function sum(int $x, int $y)
{
    var_dump($x, $y);
    echo '<br/>';
    return $x + $y;
}

$sum = sum(2, 2);
echo $sum . '<br/>';
*/


// type casting
$x = (int)'3';
var_dump($x);
    