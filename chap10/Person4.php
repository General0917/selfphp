<?php
class Person4 {
    public $firstName;
    public $lastName;

    public function __construct(string $firstName, string $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function show() {
        print "<p>僕の名前は{$this->firstName}{$this->lastName}です。</p>";
    }
}