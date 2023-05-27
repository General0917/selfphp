<?php
$message = '';
print $message ?: '空です！！';

// 上記の条件（処理）は以下になる
// print $message ? $message * '空です。'