<?php
require_once './DbManager.php';

try {
    $db = getDb();
    print '接続に成功しました。';
} catch (PDOException $e) {
    print '接続エラー' . "{$e->getMessage()}";
} finally {
    $db = null;
}