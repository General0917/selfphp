<?php
$sum = 0;
$count = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 !== 0) {
        continue;
    }
    $sum += $i;
    $count++;
}

print '合計:'.$sum;
print '<br />';
print '加算回数:' . $count . '回';