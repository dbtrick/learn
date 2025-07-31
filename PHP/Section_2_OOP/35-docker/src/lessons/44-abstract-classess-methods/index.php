<?php

declare(strict_types=1);

require_once '../../classes/44/Field.php';
require_once '../../classes/44/Text.php';
require_once '../../classes/44/Boolean.php';
require_once '../../classes/44/Checkbox.php';
require_once '../../classes/44/Radio.php';

use \folderName\Field;
use \folderName\Text;
use \folderName\Boolean;
use \folderName\Checkbox;
use \folderName\Radio;

$fields = [
    new \folderName\Text('textField'),
    new \folderName\Checkbox('checkboxField'),
    new \folderName\Radio('radioField'),
];

foreach ($fields as $field) {
    echo $field->render() . '<br/><br/>';
}
