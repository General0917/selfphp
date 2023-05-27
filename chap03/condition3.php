<?php
// $message = 'こんにちは！！';
print $message ?? 'ノーコメント！！';

// 上記の条件（処理）は以下になる
// print isset($message) ? $message : 'ノーコメント';