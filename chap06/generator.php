<?php
function myGen() {
    $gat_series_list = [
        ['model_num' => 102, 'nick' => 'Duel'],
        ['model_num' => 103, 'nick' => 'Buster'],
        ['model_num' => 105, 'nick' => 'Strike'],
        ['model_num' => 207, 'nick' => 'Blitz'],
        ['model_num' => 303, 'nick' => 'Aegis'],
    ];

    $gressorial_armament_tactical = 'GAT';
    $prototype = 'X';

    foreach ($gat_series_list as $gat_series) {
        yield "{$gressorial_armament_tactical}-{$prototype}{$gat_series['model_num']} {$gat_series['nick']}";
    }
}

foreach (myGen() as $value) {
    print $value . '<br />';
}