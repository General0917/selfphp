<?php
mb_internal_encoding('UTF-8');
$str = 'WINGSプロジェクト';

print mb_substr($str, 5, 2) . '<br />';
print mb_substr($str, 5) . '<br />';
print mb_substr($str, 5, -4) . '<br />';
print mb_substr($str, -6, 2) . '<br />';