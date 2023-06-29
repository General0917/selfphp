<?php
trait MyTrait1 {
    public function hoge() {
        print 'MyTrait1' . '<br />';
    }
}

trait MyTrait2 {
    public function hoge() {
        print 'MyTrait2' . '<br />';
    }
}

// MyTrait1/MyTrait2を有効化
class MyClass {
    // トレイトで同じメソッド同士で同時に有効化（衝突）してしまうとエラーが発生する
    // use MyTrait1, MyTrait2;

    // insteadOf演算子を利用することで、競合したメンバのいずれかひとつを優先して有効化できる
    // use MyTrait1, MyTrait2 {
    //     MyTrait1::hoge insteadOf MyTrait2; // これでMyTrait2の代わりに「MyTrait1::hoge」メソッドが実行される
    // }

    // as演算子でメンバに別名を付与することで、別々のメソッドとして実行することも可能
    use MyTrait1, MyTrait2 {
        MyTrait1::hoge insteadOf MyTrait2;
        MyTrait2::hoge as foo; // これで「MyTrait2::hoge」メソッドが「foo」メソッドとして実装（定義）される
    }
}

$cls = new MyClass('MyClass');

$cls->hoge();
$cls->foo();
