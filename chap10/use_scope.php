<?php
require_once './wings/selfphp/chap10/MyClass.php';

function hoge() {
    // 以下のソースではエラーが発生する。
    // use命令は必ず、グローバルスコープ、もしくはnamespaceブロック直下で呼び出す必要がある。
    use wings\selfphp\chap10\MyClass1;
}