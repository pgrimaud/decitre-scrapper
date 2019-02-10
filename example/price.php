<?php

use Decitre\Decitre;

require __DIR__ . '/../vendor/autoload.php';

$decitre = new Decitre();
$decitre->setBarcode('9791026811879');

print_r($decitre->getPrice());
