<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

require_once dirname(__DIR__) . '/src/numberChecker.php';

class NumberCheckerTest extends TestCase {

    #[DataProvider('numberProviderIsEven')]
    public function testIsEven(int $number, bool $expected): void {
        $checker = new NumberChecker($number);
        $this->assertSame($expected, $checker->isEven());
    }

    public static function numberProviderIsEven(): array {
        return [
            [2, true],
            [1, false],
            [0, true],
            [-1, false],
            [-2, true],
        ];
    }

    #[DataProvider('numberProviderIsPositive')]
    public function testIsPositive(int $number, bool $expected): void {
        $checker = new NumberChecker($number);
        $this->assertSame($expected, $checker->isPositive());
    }

    public static function numberProviderIsPositive(): array {
        return [
            [3, true],
            [-1, false],
            [0, false],
        ];
    }
}

?>