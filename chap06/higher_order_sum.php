<?php
// 詳細は「higher_order.php」を参照
function my_arrar_walk(array $array, callable $func) {
    foreach ($array as $key => $value) {
        $func($value, $key);
    }
}

$result = 0; // 結果値を格納するためのグローバル変数
function sum(float $value, int $key) {
    global $result; // グローバル変数を定義
    $result += $value; // 配列を値を$resultに加算
}

// 加算させる値を配列内で定義
$data = [100, 50, 10, 5];

my_arrar_walk($data, 'sum');

print "合計値: {$result}";