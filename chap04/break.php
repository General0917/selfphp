<?php
$sum = 0;
$count = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
    $count++;
    if ($sum > 1000) {
        break;
    }
}

print '合計:'.$sum;
print '<br />';
print '加算回数:' . $count . '回';