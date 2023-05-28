<?php
// if文を使用した場合の条件分岐
/*
$score_if = 75;
if ($score_if >= 90) {
    print '優';
} elseif ($score_if >= 70) {
    print '良';
} elseif ($score_if >= 50) {
    print '可';
} else {
    print '不可';
}
*/

// switch文を使用した場合の条件分岐
$score_switch = 75;
switch ($score_switch) {
    case $score_switch >= 90:
        print '優';
        break;
    case $score_switch >= 70;
        print '良';
        break;
    case $score_switch >= 50;
        print '可';
        break;
    default:
        print '不可';
        break;
}