<?php
$X100_numbers = [
    [
        'model_num' => '102',
        'nick' => 'Duel',
        'pilot' => 'Yzak Jule'
    ],
    [
        'model_num' => '103',
        'nick' => 'Buster',
        'pilot' => 'Dearka Elthman'
    ],
    [
        'model_num' => '105',
        'nick' => 'Strike',
        'pilot' => 'Kira Yamato'
    ]
];

print "GAT-X" . $X100_numbers[1]['model_num'];
print "\r";
print $X100_numbers[1]['nick'];
print "\r";
print "pilot:" . $X100_numbers[1]['pilot'];

print "<br />";
print_r($X100_numbers);