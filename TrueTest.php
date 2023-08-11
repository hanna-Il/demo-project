<?php

use PHPUnit\Framework\TestCase;

class TrueTest extends TestCase
{
    public function test($a)
    {
        self::assertEquals(42, $a);
        self::assertTrue($a == 42); // condition already checked
        if ($a == 42) { // condition already checked
            echo 'kek';
        }
    }
//    public function testFailure(): void
//    {
//        $this->assertTrue(false);
//    }
}

