<?php
class Person3 {
    // 公開（public）フィールド（どこからでもアクセス可能）
    public $firstName;
    public $lastName;

    // 非公開（private）フィールド（現在のクラス（Person2）のみアクセス可能）
    // private $firstName;
    // private $lastName;

    // 公開（public）メソッド（どこからでもアクセス可能）
    public function show() {
        print "<p>僕の名前は{$this->firstName}{$this->lastName}です。</p>";
    }

    // 非公開（private）メソッド（現在のクラス（Person2）のみアクセス可能）
    // private function show() {
    //     print "<p>僕の名前は{$this->firstName}{$this->lastName}です。</p>";
    // }
}