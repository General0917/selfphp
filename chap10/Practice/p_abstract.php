<?php
abstract class Animal {
    public abstract function outputVoice() : string;
}

class Cat extends Animal {
    // final修飾子を付けることでメソッドのオーバライド（上書き）を禁止する
    public final function outputVoice() : string {
        return 'ニャァ';
    }
}

class Dog extends Animal {
    // final修飾子を付けることをメソッドのオーバライド（上書き）を禁止する
    public final function outputVoice(): string {
        return 'バゥ';
    }
}

$cat = new Cat();
print $cat->outputVoice() . '<br />';

$dog = new Dog();
print $dog->outputVoice() . '<br />';