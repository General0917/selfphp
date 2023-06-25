<?php
// $dsnのhost名については、127.0.0.1でも接続可能
$dsn = 'mysql:dbname=selfphp; host=localhost; charset=utf8';
$user = 'General';
$password = 12345;

try {
    $db = new PDO($dsn, $user, $password);
    print '接続に成功しました。';
} catch (PDOException $e) {
    print '接続エラー' . "{$e->getMessage()}";
} finally {
    $db = null;
}