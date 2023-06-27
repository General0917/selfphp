<?php
class Person3 {
    public $firstName;
    public $lastName;

    public function show() {
        print "<p>僕の名前は{$this->firstName}{$this->lastName}です。</p>";
    }
}