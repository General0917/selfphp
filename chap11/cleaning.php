<?php
require_once '../vendor/autoload.php';

// スクリプトを含んだ文字列を用意（本来は入力されることを想定）
$str = '<div onclick="alert(\'ほげーー！\')">HogeHoge</div>';
$pur = new HTMLPurifier();

print $pur->purify($str);
