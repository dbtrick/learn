<?php

namespace folderName;

class DebtCollectionService
{

    public function collectDebt(CollectionAgency $collector)
    {
        $owedAmount = mt_rand(100, 1000);
        $collectedAmount = $collector->collect($owedAmount);

        echo 'collected $' . $collectedAmount . ' out of $' . $owedAmount . PHP_EOL;
    }

}