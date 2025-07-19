<?php

// arrays - can contain multiple data types

/*
$programmingLanguages = ['PHP', 'Javascript', 'HTML'];
echo $programmingLanguages[1];


// modifying the value of array
$programmingLanguages = ['PHP', 'Javascript', 'HTML'];
$programmingLanguages[1] = 'C++';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';


// adding value into array
$programmingLanguages = ['PHP', 'Javascript', 'Go'];
//$programmingLanguages[] = 'C++';

array_push($programmingLanguages, 'C++', 'C', 'Java', 'Python' );
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';


// Defining custom keys
$programmingLanguages = [
    'PHP' => '8.0',
    'Javascript' => '3.9',
    'Go' => '2.1'
];

$programmingLanguages['Python'] = '3.0'; // adding array value

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';
*/

// multiple data types
$programmingLanguages = [
    'PHP' => [
        'creator' => 'Rasmus Lerdorf',
        'extension' => '.php',
        'website' => 'www.php.net',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 8, 'releaseDate' => '2015-06-14'],
            ['version' => 9, 'releaseDate' => '2015-06-14'],
        ]
    ],
    'Python' => [
        'creator' => 'Guido Van Rossum',
        'extension' => '.py',
        'website' => 'www.python.org',
        'isOpenSource' => true,
        'versions' => [
            ['version' => 8, 'releaseDate' => '2015-06-14'],
            ['version' => 9, 'releaseDate' => '2015-06-14'],
        ]
    ]
];

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo $programmingLanguages['PHP']['creator']; // accessing array value

$array = ['a', 'b', 'c', 50 => 'd', 'e' => null];
unset($array[0]); //deleting one of the value in array
print_r($array);

var_dump(array_key_exists('e', $array)); // checking if the key is existing

var_dump(isset($array['e'])); // check if the key has value