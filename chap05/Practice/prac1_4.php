<?php
$str = 'ボクの名前はリオです。';

// str_replace関数は配列を引き渡すこともできる。
print str_replace(['ボク', 'リオ'], ['私', '凛生'], $str);

// 以下のソースコードでも出力は同じ

// $search_str = [
//     'ボク' => '私',
//     'リオ' => '凛生'
// ];

// $search = array_keys($search_str);
// $replace = array_values($search_str);

// print str_replace($search, $replace, $str);