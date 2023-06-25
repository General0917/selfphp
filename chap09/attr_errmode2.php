<?php
require_once './DbManager.php';

try {
    $db = getDb();
    $db->exec('不正なクエリです。');
} catch (PDOException $e) {
    print "エラーコード:{$e->getCode()} <br />";
    print "エラーメッセージ:{$e->getMessage()}";
}