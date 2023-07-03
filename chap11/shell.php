<?php
error_reporting(error_reporting() & ~E_WARNING); // 警告を非表示にする
$param = escapeshellarg($_GET['param']);
$result = shell_exec("dir {$param}");
// $result = shell_exec("dir {$_GET['param']}");
print mb_convert_encoding($result, 'UTF-8', 'SJIS');