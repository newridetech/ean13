<?php

namespace Newride\EAN13;

function create(string $digits): string
{
    $paddedDigits = str_pad($digits, 12, '0', STR_PAD_LEFT);

    return $paddedDigits.checkdigit($paddedDigits);
}
