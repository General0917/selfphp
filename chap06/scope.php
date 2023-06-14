<?php
$x = 10;

function checkScope() : int {
    $x = ""; // 変数を定義しないとwarningが表示される。
    return ++$x;
}

print checkScope();
print '<br />';
print $x;