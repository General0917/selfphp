<?php
$sum = 0;
$i = 1;
$count = 0;
while($i <= 100) {
    $i++;
    if ($i % 2 !== 0) {
        continue;
    }
    $count++;
    $sum += $i;
}

print '合計:'.$sum;
print '<br />';
print '加算回数:' . $count . '回';