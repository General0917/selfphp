<?php
mb_internal_encoding('UTF-8');
$str = 'ｻｰﾊﾞｰｻｲﾄﾞ(server side)技術';
print mb_convert_kana($str, 'RKV');