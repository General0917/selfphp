<?php
class MyClass {
    public static function square(float $width, float $height) : float {
        return $width * $height;
    }
}

print "四角形の面積:" . MyClass::square(10, 5) . 'cm^2';

