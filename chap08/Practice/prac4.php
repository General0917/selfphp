<?php
$cnt = $_COOKIE['cnt'] + 1;
setcookie('cnt', $cnt, time() + 60 * 60 * 24 * 90);
print "あなたがこのサイトに訪れたのは{$cnt}回目です。";