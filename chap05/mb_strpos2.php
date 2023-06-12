<?php
$str = 'にわにはにわにわとりがいる';
// if (mb_strpos($str, 'にわ') != false) {
//     print '文字列が見つかりました。';
// }
// 何も表示されない

if (mb_strpos($str, 'にわ') !== false) {
    print '文字列が見つかりました。';
}
