<?php

namespace folderName;

class ClassA
{
    public function __construct(public int $x, public int $y)
    {

    }

    public function foo(): string
    {
        return 'foo';
    }

    public function bar(): string
    {
        return new class
        {

        };
    }
}