<?php
class Area3 {
    const PI = 3.14;

    public static function circle(float $radius) : float {
        return pow($radius, 2) * self::PI;
    }
}