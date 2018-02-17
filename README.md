# ean13

This package provides few functions that calculate EAN13 digits and checksum
digit. It does not generate barcode images (and it will stay that way). You can
use this package to generate barcode image using calculated value.

It uses https://github.com/ronanguilloux/IsoCodes to validate generated codes.
`checkdigit` function was taken from here: https://edmondscommerce.github.io/php/barcode/ean13-barcode-check-digit-with-php.html

I hope this package helps you.

## generate code

```php
use function Newride\EAN13\create;

create('123'); // 0000000001236
```

## generate check digit only

```php
use function Newride\EAN13\checkdigit;

checkdigit('123'); // 6
```
