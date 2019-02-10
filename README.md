# Decitre scrapper

[![Packagist](https://img.shields.io/badge/packagist-install-brightgreen.svg)](https://packagist.org/packages/pgrimaud/decitre-scrapper)

Little scraper for https://www.decitre.fr

## Usage

```
composer require pgrimaud/decitre-scrapper
```

```php
$decitre = new Decitre\Decitre();
$decitre->setBarcode('9791026811879');

$price = $decitre->getPrice();
```

Will return : 
```
17.5
```
