<?php

namespace Tests;

require dirname(__DIR__) . '/vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use App\SpeedSensor;

class SpeedSensorTest extends TestCase {

    public function testReturnsTooSlow(): void {
        $speedSensor = new SpeedSensor(29);
        $this->assertSame('too slow', $speedSensor->getSpeedLevel());
    }

    public function testReturnsAppropriateSpeed(): void {
        $speedSensor = new SpeedSensor(60);
        $this->assertSame('appropriate speed', $speedSensor->getSpeedLevel());
    }

    public function testReturnsMinorSpeeding(): void {
        $speedSensor = new SpeedSensor(80);
        $this->assertSame('minor speeding', $speedSensor->getSpeedLevel());
    }

    public function testReturnsModerateSpeeding(): void {
        $speedSensor = new SpeedSensor(100);
        $this->assertSame('moderate speeding', $speedSensor->getSpeedLevel());
    }

    public function testReturnsSevereSpeeding(): void {
        $speedSensor = new SpeedSensor(110);
        $this->assertSame('severe speeding', $speedSensor->getSpeedLevel());
    }

    public function testZeroReturnsInvalidSpeed(): void {
        $speedSensor = new SpeedSensor(0);
        $this->assertSame('invalid speed', $speedSensor->getSpeedLevel());
    }

    public function testNegativeReturnsInvalidSpeed(): void {
        $speedSensor = new SpeedSensor(-1);
        $this->assertSame('invalid speed', $speedSensor->getSpeedLevel());
    }
}


?>