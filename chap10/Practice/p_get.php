<?php
class MyClass {
    public function __get(string $name){
        print "{$name}プロパティは存在しません。";
    }
}

// $obj = new MyClass();
$obj = new MyClass('MyClass');

// $obj->nothing;
$str = $obj->nothing;