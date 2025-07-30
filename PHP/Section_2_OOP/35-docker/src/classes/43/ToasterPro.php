<?php

namespace folderName;

/**
 *
 *
 */

class ToasterPro extends Toaster //inherit the public and protected class of toaster
{

    public function addSlice(string $slice): void
    {
        parent::__construct();
        $this->size = 4;
    }

    public function toastBagel()
    {
        foreach ($this->slices as $i=>$slice) {
            echo ($i + 1) . ": with bagels option " . $slice . PHP_EOL;
        }
    }
}