<?php

require __DIR__ . '/../vendor/autoload.php';

$decitre = new Decitre\Decitre();
$decitre->setBarcode('9791026811879');

print_r($decitre->getPrice());
