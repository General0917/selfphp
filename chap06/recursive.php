<?php
function factorial(int $num) : int {
    if ($num !== 0) {
        return $num * factorial($num - 1);
    }
    return 1;
}

// 5の階乗を再帰関数で表示
print '5の階乗は:' . factorial(5);