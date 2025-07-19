<?php

// String

/*
$firstName = "Feynman";
$lasttName = "John";

$name = $firstName . " " . $lasttName;
echo $name . '<br/>';

// accesing character in a strong
echo $name[1] . '<br/>';

// modifying character in a string
$name[4] ='M';
echo $name;
*/

// Heredoc - inclose in ""
$text = <<<TEXT
    Line 1
    Line 2
    Line 3
TEXT;
echo nl2br($text);

// Nowdoc - inclose in ''
$text = <<<'TEXT'
    Line 1
    Line 2
    Line 3 ' "
TEXT;
echo '<br/>';
echo nl2br($text);
