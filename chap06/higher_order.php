<?php
// 高階関数gat_seriesを定義
function gat_series(array $gat_series_list, callable $func) {
    // 配列$$gat_series_listの内容を順に処理
    foreach ($gat_series_list as $key => $name) {
        $func($name, $key);
    }
}

$gressorial_armament_tactical = 'GAT';
$prototype = 'X';

//配列を処理するためのユーザー定義関数
function showGatSeries($name, $gat) {
    global $gressorial_armament_tactical, $prototype;
    global $prototype;
    print "{$gressorial_armament_tactical}-{$prototype}{$gat} {$name}<br />";
}

$gat_series_list = [
    '102' => 'Duel',
    '103' => 'Buster',
    '105' => 'Strike',
    '207' => 'Blitz',
    '303' => 'Aegis'
];

gat_series($gat_series_list, 'showGatSeries');