<?php
print true ? 1 : false ? 'OK' : 'NG'; // 結果は「OK」で出力される。

print "<br />";

// PHP 8.2.0で複数三項演算子を定義する場合は、以下のように()を付けてわかりやすいようにする。
print (true ? 1 : false) ? 'OK' : 'NG';
print "<br />";
print true ? 1 : (false ? 'OK' : 'NG');

// PHP 8.2.0では使用できないので、7.4以下で実施する。