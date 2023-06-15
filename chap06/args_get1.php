<?php
function sum() {
    // 結果を格納するための変数$result
    $result = 0;

    // 引数を配列として取得
    $args = func_get_args();

    // 取得した引数を順に加算処理
    foreach ($args as $value) {
        $result += $value;
    }

    return $result;

}

print sum(7, 3, 10);
print '<br />';
print sum(11, -5, 4, 88);