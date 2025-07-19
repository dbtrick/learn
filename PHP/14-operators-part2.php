<?php

// Error Control Operators (@) - PS: not recommended for error handling
/*
$x = @file('foo.txt');

// Increment/Decrement Operators (++, --)
$x = 5;
echo $x++;
echo $x;

// logical Operators (&& || ! and or xor)
$x = false;
$y = true;
var_dump($x == $y);
var_dump($x || $y);


// Bitwise Operators (& | ^ ~ << >>)
$x = 6;
$y = 3;

// 110
// 011
// ---
// 010
var_dump($x & $y);
*/

//Array Operators
$x = ['a' => 1, 'b' => 2, 'c' => 3];
$y = ['a' => 1, 'b' => 2, 'c' => 3];
$z = $x + $y;

var_dump($z == $y);