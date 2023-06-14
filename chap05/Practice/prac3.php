<?php
// ファイルを読み込みモードで開く
$file = fopen('sample.dat', 'rb') or die('Cannot open file!!');

// ファイルを共有ロックする
flock($file, LOCK_SH);

// ファイルの内容を読み込む
while ($line = fgets($file, 1024)) {
    // 正規表現にマッチする文字列を1行ずつ改行して表示する
    if(preg_match('|http(s)?://([\w-]+\.)+[\w-]+(/[\w ./?%&=-]*)?|i', $line, $data)) {
        print $data[0] . '<br />';
    }
}

// ファイルのロックを解除する
flock($file, LOCK_UN);

// ファイルを閉じる
fclose($file);