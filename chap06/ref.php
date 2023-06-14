<?php
// function increment(int $num) : int {
//     $num++;
//     return $num;
// }

function increment(int &$num) : int {
    $num++;
    return $num;
}

$value = 10;
print increment($value);
print '<br />';
print $value;