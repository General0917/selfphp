<?php
error_reporting(error_reporting() & ~E_WARNING); // 警告を非表示にする
$fl = $_GET['path'] ?? 'default.jpg';

$flag = false; // ホワイトリストにマッチするかを判定するフラグ

// /docフォルダ配下のファイルを順に取得
$dir = new DirectoryIterator('./doc/');

foreach ($dir as $file) {
    // クエリ情報pathと等しいファイルが存在する場合のみ、フラグをtrue
    if ($file->isFile() && $file->getFileName() === $fl) {
        $fl = $file->getFileName(); // ファイルを上書き
        $flag = true;
        break;
    }
}

// フラグ変数がfalseである場合は不正な要求と判断し、エラーを表示
if (!$flag) {
    die('不正な要求です。');
}

header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.$fl.'"');
print file_get_contents("./doc/{$fl}");