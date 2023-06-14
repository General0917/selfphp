<?php
$diagonal1 = 5;
$diagonal2 = 2;

function diamond(float $diagonal1, float $diagonal2) : float {
    return ($diagonal1 * $diagonal2) / 2;
}

$area = diamond($diagonal1, $diagonal2);

print "菱形の面積は{$area}です。";