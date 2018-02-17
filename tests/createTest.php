<?php

namespace Newride\EAN13\tests;

use function Newride\EAN13\create;
use PHPUnit\Framework\TestCase;
use IsoCodes\Ean13;

class createTest extends TestCase
{
    public function testCreate(): void
    {
        $calculated = create('123');

        $this->assertSame('0000000001236', $calculated);
        $this->assertTrue(Ean13::validate($calculated));
    }
}
