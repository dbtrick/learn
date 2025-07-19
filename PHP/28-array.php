<?php

require '27-dates-time.php';

// array_chunk(array $array, int $length, bool $preserveKeys = false): array
/*
$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

prettyPrintArray(array_chunk($items, 2, true));



// array_combine(array $keys, array $values): array

$array1 = ['a', 'b', 'c', 'd', 'e'];
$array2 = [5, 10, 15, 20, 25];

prettyPrintArray(array_combine($array1, $array2));

// array_filter(array $array, callable|null $callback = null, int $mode = 0): array

// - filtering odd numbers and keeping the even number

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$even = array_filter($array, fn($number, $key) => $number % 2 === 0, ARRAY_FILTER_USE_BOTH);

$even = array_values($even);

prettyPrintArray($even);


// array_keys(array $keys, mixed $search_value, bool $strict = false): array
//- uses to retrieve the value of keys

$array = ['a' => 5, 'b' => 6, 'c' => 7, 'd' => 8, 'e' => 9];
$keys = array_keys($array);

prettyPrintArray($keys);


// array_map(callable|null $callback, array $array,  array ... $arrays): array

$array1 = ['a' => 1, 'b' => 2, 'c' => 3];
$array2 = ['a' => 4, 'b' => 5, 'c' => 6];

$array = array_map(fn($number1, $number2) => $number1 * $number2, $array1, $array2);

prettyPrintArray($array);


// array_merge(array ... $arrays): array

$array1 = [1, 2, 3];
$array2 = ['a' => 4, 'b' => 5, 'c' => 6];
$array3 = [7, 8, 9];

$merged = array_merge($array1, $array2, $array3);

prettyPrintArray($merged);


// array_reduce(array $array, callable $callback, mixed $initialValue = null): mixed

$invoiceItems = [
  ['price' => 9.99, 'quantity' => 2, 'desc' => 'Item 1'],
  ['price' => 29.99, 'quantity' => 3, 'desc' => 'Item 2'],
  ['price' => 149, 'quantity' => 2, 'desc' => 'Item 3'],
  ['price' => 14.99, 'quantity' => 5, 'desc' => 'Item 4'],
  ['price' => 4.99, 'quantity' => 7, 'desc' => 'Item 5'],
];

$total = array_reduce(
    $invoiceItems,
    fn($sum, $item) => $sum + $item['quantity'] * $item['price'],
    500
);

echo $total;


// array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false
// - always use strict comparison (===)

$array = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j'];

$key = array_search('a', $array);

if ($key === false) {
    echo 'Letter not found';
}


// array_diff - diff of value

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'e' => 4];
$array2 = ['f' => 4, 'g' => 6, 'h' => 7];
$array3 = ['l' => 3, 'm' => 9, 'n' => 10];

prettyPrintArray(array_diff($array1, $array2, $array3));

// array_diff_assoc

prettyPrintArray(array_diff_assoc($array1, $array2, $array3));

// array_diff_key

prettyPrintArray(array_diff_assoc($array1, $array2, $array3));
*/

$array1 = ['a' => 1, 'b' => 3, 'c' => 2, 'e' => 4];
// sorting array
// asort - sorting by values

prettyPrintArray($array1);

asort($array1);

prettyPrintArray($array1);
