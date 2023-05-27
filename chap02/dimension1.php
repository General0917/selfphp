<?php
$X100_numbers = [
    ['GAT-X102', 'Duel', 'Yzak Jule'],
    ['GAT-X103', 'Buster', 'Dearka Elthman'],
    ['GAT-X105', 'Strike', 'Kira Yamato']
];

print $X100_numbers[2][0];
echo "\t";
print $X100_numbers[2][1];
echo "<br />";
print "Pilot:" . $X100_numbers[2][2];
echo "<br />";
print_r($X100_numbers);