<?php

declare(strict_types=1);

namespace folderName\Paddle;

use folderName\Status\Status;

class Transaction
{

    /**
     * Class constants
     * - immutable - value cannot be change
     */

    private string $status;

    public function __construct()
    {
        $this->setStatus(Status::PENDING);
    }

    public function setStatus(string $status) {
        if (! isset(Status::ALL_STATUS[$status])) {
            throw new \Exception('Invalid status');
        }

        $this->status = $status;

        return $this;
    }
}