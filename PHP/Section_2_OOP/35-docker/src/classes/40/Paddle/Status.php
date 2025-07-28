<?php

namespace folderName\Status;

class Status
{

    const PAID  = 'paid';
    const PENDING  = 'pending';
    const DECLINED  = 'declined';
    public const ALL_STATUS = [
        self::PAID => 'Paid',
        self::PENDING => 'Pending',
        self::DECLINED => 'Declined',
    ];

}