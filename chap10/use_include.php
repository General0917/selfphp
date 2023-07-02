<?php
require_once './wings/selfphp/chap10/MyClass.php';

// use命令によるインポートは、現在のファイルのみで認識される。よって、次のようなコードはエラーとなる。
use wings\selfphp\chap10\MyClass;

require_once './use_included.php';