<?php
$str;
var_dump($str); // NULL
$str = '代入';

print '<br />';
var_dump($str); // string(6) "代入"

print '<br />';
unset($str);

var_dump($str); // NULL