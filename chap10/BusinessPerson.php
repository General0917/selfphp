<?php
// 継承元のサブクラスをインポート
require_once './Person.php';

// クラスにfinal修飾子を追加するとBusinessPersonクラスのオーバライド（上書き）を禁止する
// final class BusinessPerson extends Person {

class BusinessPerson extends Person {
    // サブクラス独自のworkメソッドを定義
    public function work() {
        print "{$this->firstName}{$this->lastName}は働いています。";
    }

    // final修飾子を追記
    // final修飾子を追加するとworkメソッドのオーバライド（上書き）を禁止する
    // public final function work() {
    //     print "{$this->firstName}{$this->lastName}は働いています。";
    // }
}