<?php
class Person {
    public $firstName;
    public $lastName;

    public function __construct(string $lastName, string $firstName) {
            $this->lastName = $lastName;
            $this->firstName = $firstName;
    }

    public function show() {
        print "<p>僕の名前は{$this->firstName}{$this->lastName}です。</p>";
    }

    public function __toString() {
        return $this->firstName.$this->lastName;
    }

    public function __debugInfo() {
        return [
            '名' => $this->firstName,
            '性' => $this->lastName
        ];
    }
}