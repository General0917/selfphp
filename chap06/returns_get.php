<?php
require_once 'returns.php';

$result = max_min(10, 2, -5, 7, 78);

// $resultの結果を配列形式で表示
print_r($result);

// listメソッドで最大値($max)、最小値($min)を定義
list($min, $max) = max_min(10, 2, -5, 7, 78);

print '<br />';

print "最大値:{$max}、最小値{$min}";