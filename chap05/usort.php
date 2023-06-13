<?php
// 単位を昇順に準備
$keys = [ '十', '百', '千', '万', '億', '兆', '京', '垓', '𥝱', '穰', '溝',
'澗', '正', '載', '極', '恒河沙', '阿僧祇', '那由他', '不可思議', '無量大数' ];

// ソート対象の配列
$data = [ '那由他', '京', '垓', '億', '無量大数' ];

// 指定された単位で配列$dataをソート
usort($data, function($a, $b) use ($keys) {
    // print array_search($a, $keys);
    // print '<br />';
    // print array_search($b, $keys);
    return array_search($a, $keys) <=> array_search($b, $keys);
});

print_r($data); // Array ( [0] => 億 [1] => 京 [2] => 垓 [3] => 那由他 [4] => 無量大数 )
