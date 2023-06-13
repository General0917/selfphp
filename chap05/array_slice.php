<?php
$data = ['高江', '青木', '片渕', '和田', '花田', '佐藤'];
print_r(array_slice($data, 2, 3));
print '<br />';
print_r(array_slice($data, 2, 3, true));
print '<br />';
print_r(array_slice($data, 4));
print '<br />';
print_r(array_slice($data, -4, -3));