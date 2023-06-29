<?php
class MyParent {
    public function hoge() {
        print 'MyParent!!';
    }
}

trait MyTrait {
    public function hoge() {
        print 'MyTrait!!';
    }
}

// MyParentクラス、MyTraitトライトを継承
class MyChild extends MyParent {
    use MyTrait;

    // サブクラス（子クラス）のhogeメソッドをコメントアウトすると、MyTraitのhogeメソッドが呼ばれる
    // ちなみに、 サブクラス（子クラス）とMyTraitトライトのhogeメソッドをどちらもコメントアウトすると、MyParentクラス（スーパクラス（親クラス））のhogeメソッドが呼ばれる
    public function hoge() {
        print 'MyChild!!';
    }
}

$cls = new MyChild();

$cls->hoge();