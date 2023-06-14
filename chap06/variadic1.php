<?php
function sum(float ...$args) : float {
    // 結果を格納するための変数$result
    $result = 0;

    // 取得した引数を順に加算処理
    foreach ($args as $arg) {
        $result += $arg;
    }

    // 加算した結果を返す
    return $result;
}

print sum(7, 3, 10) . '<br />';
print sum(11, -5, 4, 88);