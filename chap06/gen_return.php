<?php
function readLines(string $path) {
    $i = 0; // 行数;
    $file = fopen($path, 'rb') or die('ファイルが見つかりません。');

    // 行単位にテキストを取得&yield
    while ($line = fgets($file, 1024)) {
        $i++;
        yield $line;
    }

    fclose($file);
    
    // 読み込んだテキストの行数を返す
    return $i;
}

// sample.datから行単位にテキスト出力
$lines = readLines('sample.dat');
foreach ($lines as $line) {
    echo $line. '<br />';
}

// 最終的に読み込んだ行数を取得
print "{$lines->getReturn()}行ありました。";