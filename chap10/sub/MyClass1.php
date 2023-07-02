<?php
namespace selfphp\chap10;

class SubClass {
    // 現在の名前空間を表示するための静的メソッドshowNamespace
    public static function showClass() {
        print __CLASS__;
    }
}

$cls1 = new SubClass();

// $cls1::showClass();

// print '<br />';

// $cls1->showClass();