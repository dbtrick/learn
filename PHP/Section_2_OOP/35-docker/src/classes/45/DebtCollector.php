<?php

namespace folderName;

interface DebtCollector
{
    public function collect(float $owedAmount): float;
}