<?php

namespace Tests;

require dirname(__DIR__) . '/vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use App\SpeedSensor;

class SpeedSensorTest extends TestCase {

    #[DataProvider('SpeedProvider')]
    public function testGetSpeedLevel(int $number, string $expected): void {
        $speedSensor = new SpeedSensor($number);
        $this->assertSame($expected, $speedSensor->getSpeedLevel());
    }

    public static function SpeedProvider(): array {
        return [
            [29, 'too slow'],
            [30, 'appropriate speed'],
            [60, 'appropriate speed'],
            [80, 'minor speeding'],
            [100, 'moderate speeding'],
            [110, 'severe speeding'],
            [0, 'invalid speed'],
            [-1, 'invalid speed']
        ];
    }  
}
?>