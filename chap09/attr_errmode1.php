<?php
require_once './DbManager.php';

$db = getDb();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
$db->exec('不正なクエリです。'); // 不正なクエリのエラー内容（エラーメッセージを表示する）

// エラーコードが「00000」でない場合、エラーが発生したとみなす。
if ($db->errorCode() !== '00000') {
    $info = $db->errorInfo();
    print 'エラーコード:' . "{$info[0]} <br />";
    print 'エラーコード（ドライバ）:' . "{$info[1]} <br />";
    print 'エラーメッセージ:' . "{$info[2]}";
}