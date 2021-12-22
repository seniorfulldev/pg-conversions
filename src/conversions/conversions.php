<?php

namespace conversions;

class Conversions
{

    /**
     * Create a new class instance.
     *

     * @return void
     */
    public function __construct()
    {
       
        $this->minuteOfAngle = 1.04719755119; // Inches at 100 yards
        $this->mil = 3.6; // Inches at 100 yards
        $this->pi = 3.14159265358979;

    }

    public function degreesToRadians($degrees){
        // Converts from a degree to a radian angle.
        return $degrees * $this->pi / 180;
    }

    public function inchesToIPHY($inches, $currentRange){
        // Converts from inches to inches per 100 yards
        return ($inches * 100 / $currentRange);
    }

    public function inchesToMil($inches, $currentRange){
        // Converts from inches to milliradians.
        return ($inches * 100 / $this->mil / $currentRange);
    }

    public function inchesToMinutesOfAngle($inches, $currentRange){
        // Converts from inches to minutes of angle (MoA).
        return ($inches * 100 / $this->minuteOfAngle / $currentRange);
    }

    public function isEven($input){
        /// Returns true if the inputed integer is an even number.
        if ($input / 2 * 2 === $input) {
            return true;
        } else {
            return false;
        }
    }

    public function metersToYards($meters){
        return ($meters / 0.9144);
    }

    public function milesPerHourToInchesPerSecond($inputVelocityMPH){
        // Converts from a miles per hour (MPH) to inches per second.
        return $inputVelocityMPH * 17.6004;
    }

    public function radiansToDegrees($radians){
        // Converts from a radian ro a degree angle.
        return $radians * 180 / $this->pi;
    }

    public function sec($angle){
        // Secant
        return 1 / cos($angle);
    }

    public function sizeToDistance($actualTargetSizeInches, $reticleViewedTargetSizeMils){
        return round(($actualTargetSizeInches / 36) * 1000 / $reticleViewedTargetSizeMils);
    }

    public function yardsToMeters($yards){
        return ($yards * 0.9144);
    }
}
