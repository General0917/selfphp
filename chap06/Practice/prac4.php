<?php
function refCheck(int &$num) {
    print $num . '<br />';
    $num++;
    unset($num);
    print $num . '<br />';
}

$num = 1;
refCheck($num);
print $num;