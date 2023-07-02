<?php
namespace selfphp\chap10;

class MyClass2 {
    // 現在の名前空間を表示するための静的メソッドshowNamespace
    public static function showClass() {
        print __CLASS__;
    }
}

$cls2 = new MyClass2();

// $cls2::showClass();

// print '<br />';

// $cls2->showClass();