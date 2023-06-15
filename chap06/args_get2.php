<?php
function sum() {
    $result = 0;
    for ($i = 0; $i < func_get_args(); $i++) {
        $result += $i;
    }
    return $result;
}

print sum(7, 3, 10);
print '<br />';
print sum(11, -5, 4, 88);