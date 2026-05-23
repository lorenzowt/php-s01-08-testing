<?php

namespace App;

class SpeedSensor {

    public function __construct(private int $speed) {

    }

    public function getSpeedLevel(): string {
        if ($this->speed > 100) {
            return 'severe speeding';
        }
        
        elseif($this->speed > 80) {
            return 'moderate speeding';
        }

        elseif($this->speed > 60) {
            return 'minor speeding';
        }

        elseif($this->speed >= 30) {
            return 'appropriate speed';
        }

        elseif($this->speed >= 1) {
            return 'too slow';
        }
        else {
            return 'invalid speed';
        }
    }
}

?>