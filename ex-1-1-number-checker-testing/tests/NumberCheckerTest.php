<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/src/numberChecker.php';

class NumberCheckerTest extends TestCase {
    public function testEvenNumberReturnsTrue(): void {
        $checker = new NumberChecker(4);
        $this->assertTrue($checker->isEven());
    }

    public function testOddNumberReturnsFalse(): void {
        $checker = new numberChecker(3);
        $this->assertFalse($checker->isEven());
    }

    public function testPositiveNumberReturnsTrue(): void {
        $checker = new NumberChecker(2);
        $this->assertTrue($checker->isPositive());
    }

    public function testNegativeNumberReturnsFalse(): void {
        $checker = new NumberChecker(-1);
        $this->assertFalse($checker->isPositive());
    }

    public function TestZeroReturnsFalse(): void {
        $checker = new NumberChecker(0);
        $this->assertFalse($checker->isPositive());
    }
}

?>