<?php

namespace folderName;

/**
 * - you can only inherit public and private property
 * - cannot downgrade the access modifier(eg, from public to private)
 * - cannot extend more than one class but support multi-level inheritance
 * - inheritance can break the encapsulation
 * - use inheritance when needed (check FancyOven class)
 */

class Toaster
{
    protected array $slices = [];
    protected int $size;

    public function __construct()
    {
        $this->slices =[];
        $this->size = 2;
    }

    public function addSlice(string $slice): void
    {
        if (count($this->slices) < $this->size) {
            $this->slices[] = $slice;
        }
    }

    public function toast()
    {
        foreach ($this->slices as $i=>$slice) {
            echo ($i + 1) . ": Toasting " . $slice . PHP_EOL;
        }
    }
}