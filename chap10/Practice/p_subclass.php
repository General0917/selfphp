<?php
require_once './p_inherit.php';

class p_subclass extends MyClass {
    public function getData() : string {
        return '['.parent::getData().']';
    }
}

$obj = new p_subclass('composer');

print $obj->getData();