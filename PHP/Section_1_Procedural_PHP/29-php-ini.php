<?php

// php.ini & configuration

// error_reporting

/*

var_dump(ini_get('error_reporting'));
var_dump(E_ALL); // recommended to dev and prod

$array = [1];

echo $array[3];
*/

// display errors

var_dump(ini_get('display_errors'));
ini_set('display_errors', 0); // recommended in prod

$array = [1];

echo $array[3];