<?php
// CSVファイルに書き込む内容を配列内に追記する。
$data[] = date('Y/m/d H:i:s');
$data[] = $_SERVER['SCRIPT_NAME'];
$data[] = $_SERVER['HTTP_USER_AGENT'];

// data内に格納されているデータを確認する
print_r($data);

// ファイルを開く（ファイルを作成する）
$file = @fopen('access.csv', 'ab') or dir('ファイルを開けませんでした！！');

// ファイルをロックする
flock($file, LOCK_EX);

// ファイルに書き込む
fwrite($file, implode("\t", $data) . "\n");

// ファイルのロックを解除する
flock($file, LOCK_UN);

// ファイルを閉じる
fclose($file);