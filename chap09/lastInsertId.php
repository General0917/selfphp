<?php
require_once './DbManager.php';

try {
    // データベースへの接続を確立
    $db = getDb();

    // INSERTするデータを変数で定義
    $nam = '山田凛生';
    $sex = '男';
    $old = 18;
    $enter = '2016-09-30';
    $memo = '';

    // memberテーブルに対して新規レコードを挿入
    $db->exec("INSERT INTO member (nam, sex, old, enter, memo) VALUES ('{$nam}', '{$sex}', '{$old}', '{$enter}', '{$memo}')");

    // 直近のINSERT命令で取得したオートインクリメント値を取得
    print "直近のID値:{$db->lastInsertId()}";
} catch (PDOException $e) {
    print "エラーメッセージ: {$e->getMessage()}";
}