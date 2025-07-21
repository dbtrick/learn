<?php

// Loops

// While
$i = 0;
while ($i < 10) {
    echo $i++;
}

echo '<br/>';

// do-while
$x = 11;
do {
    echo $x++;
} while ($x < 10);

echo '<br/>';

// for
for ($z = 0; $z < 10; $z++) {
    echo $z;
}

echo '<br/>';

// foreach
$programmingLanguages = ['php', 'python', 'java'];
foreach ($programmingLanguages as $programmingLanguage) {
    echo $programmingLanguage . '<br />';
}
