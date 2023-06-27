<?php
class Person5 {
    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __destruct(){
        print '<p>'.__CLASS__.'オブジェクトが破棄されました。</p>';
    }

    public function show() {
        print "<p>僕の名前は{$this->firstName}{$this->lastName}です。</p>";
    }
}