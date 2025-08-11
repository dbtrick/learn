<?php

namespace folderName;

class InvoiceCollection implements \IteratorAggregate //\Iterator
{

    /**
     * @param array $array
     */
/*    public function __construct(public array $invoices)
    {
    }

    public function current()
    {
        echo __METHOD__ . "\n";

        return current($this->invoices);
    }

    public function next()
    {
        echo __METHOD__ . "\n";

        next($this->invoices);
    }

    public function key()
    {
        echo __METHOD__ . "\n";

        return key($this->invoices);
    }

    public function valid()
    {
        echo __METHOD__ . "\n";

        return key($this->invoices) !== null;
    }

    public function rewind()
    {
        echo __METHOD__ . "\n";

        reset($this->invoices);
    }*/

    public function __construct(public array $invoices)
    {

    }

    public function getIterator()
    {
        return new \ArrayIterator($this->invoices);
    }
}