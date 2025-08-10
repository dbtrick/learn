<?php

namespace folderName;

class MissingBillingInfoException extends \Exception
{
    protected $message = '"No billing information provided"';
}