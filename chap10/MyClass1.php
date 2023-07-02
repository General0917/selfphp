<?php
namespace wings\selfphp\chap10;

class MyClass1 {
    // 現在の名前空間を表示するための静的メソッドshowNamespace
    public static function showClass() {
        print __CLASS__;
    }
}

$cls1 = new MyClass1();

// $cls1::showClass();

// print '<br />';

// $cls1->showClass();