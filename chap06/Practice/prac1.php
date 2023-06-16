<?php
function square(float $base = 1, float $height = 1) : float {
    return $base * $height;
}

$area = square(8, 10);

print "デフォルトでの平行四辺形の面積は" . square() . "です。";
print '<br />';
print "引数の指定での平行四辺形の面積は{$area}" . "です。";