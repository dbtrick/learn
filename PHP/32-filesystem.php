<?php

// working with filesystem

$dir = scandir(__DIR__);

var_dump($dir);

//var_dump(is_dir($dir[17]));  // check if it is directory
var_dump(is_file($dir[17]));  // check if it is file

// mkdir('foo') // creating directory foo
//rmdir('foo') // deleting directory foo(directory should be empty)

// mkdir('foo/bar', recursive: true) // creating recursive directory foo
// rmdir('foo/bar', recursive: true) // deleting recursive directory foo

// checking if the file exists

