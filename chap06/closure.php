<?php
// 詳細は「higher_order.php」を参照
function gat_series(array $gat_series_list, callable $func) {
    foreach ($gat_series_list as $key) {
        $func($key);
    }
}

$gressorial_armament_tactical = 'GAT';
$prototype = 'X';

$gat_series_list = [
    ['model_num' => 102, 'nick' => 'Duel'],
    ['model_num' => 103, 'nick' => 'Buster'],
    ['model_num' => 105, 'nick' => 'Strike'],
    ['model_num' => 207, 'nick' => 'Blitz'],
    ['model_num' => 303, 'nick' => 'Aegis'],
];

// print_r($gat_series_list);

gat_series($gat_series_list, function ($key) {
    global $gressorial_armament_tactical, $prototype;
    print "{$gressorial_armament_tactical}-{$prototype}{$key['model_num']} {$key['nick']} <br />";
});