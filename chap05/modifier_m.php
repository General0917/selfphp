<?php
$str = "7人の小人と白雪姫\n101匹ワンちゃん";

// $strの内容を先頭から検索&マッチしたものを書き出し
// if (preg_match_all('/^[0-9]{1,}/', $str, $data)) {
//     foreach($data[0] as $item) {
//         print "マッチング結果: {$item}<br />";
//     }
// }

if (preg_match_all('/^[0-9]{1,}/m', $str, $data)) {
    foreach ($data[0] as $item) {
        print "マッチング結果: {$item}<br />";
    }
}