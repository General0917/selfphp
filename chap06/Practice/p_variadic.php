<?php
function product(float ...$args): float {
    $result = 1;
    foreach ($args as $arg) {
        $result *= $arg;
    }
    return $result;
}

$mul = product(-1, 5, 10);

print "与えられた引数の総積は、{$mul}です。";