<?php
namespace selfphp\chap10;

class MyClass3 {
    // 現在の名前空間を表示するための静的メソッドshowNamespace
    public static function showClass() {
        print __CLASS__;
    }
}

$cls3 = new MyClass3();

// $cls3::showClass();

// print '<br />';

// $cls3->showClass();