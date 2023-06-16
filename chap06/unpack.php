<?php
function getTrianglesArea(float $base, float $height): float {
    return $base * $height / 2;
}

// print getTrianglesArea([10, 5]);
print getTrianglesArea(...[10, 5]);