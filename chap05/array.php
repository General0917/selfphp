<?php
$data = ['GAT-X102', 'GAT-X103', 'GAT-X105'];
print array_push($data, 'GAT-X207', 'GAT-X303');
print '<br />';
print_r($data);
print '<br />';
print array_pop($data);
print '<br />';
print array_shift($data);
print '<br />';
print_r($data);
print '<br />';
print array_unshift($data, 'GAT-X131', 'GAT-X252', 'GAT-X370');
print '<br />';
print_r($data);