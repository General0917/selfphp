<?php
// 詳細は「higher_order.php」を参照
function my_array_walk(array $array, callable $func) {
    foreach ($array as $key => $value)  {
        $func($value, $key);
    }
}

// 結果を求めるための関数
$data = [100, 50, 10, 5];

// 結果値を格納するための変数
$result = 0;
my_array_walk($data, function(float $value, int $key) use(&$result) {
    $result += $value;
});

print "合計値:{$result}";