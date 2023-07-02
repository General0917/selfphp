<?php
require_once './wings/selfphp/chap10/MyClass.php';
require_once './wings/selfphp/chap10/MyClass2.php';
require_once './wings/selfphp/chap10/MyClass3.php';

// MyClassクラスをインポート（showClassは現在の完全クラス名を表示）
use wings\selfphp\chap10\MyClass;
print MyClass::showClass();

print '<br />';

use wings\selfphp\chap10\MyClass2, wings\selfphp\chap10\MyClass3;
print MyClass2::showClass();
print '<br />';
print MyClass3::showClass();