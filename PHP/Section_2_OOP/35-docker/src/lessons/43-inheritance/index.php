<?php

declare(strict_types=1);

require_once '../../classes/43/Toaster.php';
require_once '../../classes/43/ToasterPro.php';

use \folderName\Toaster;
use \folderName\ToasterPro;

$toaster = new ToasterPro();

$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->toastBagel();
