<?php
// それぞれのアクセス権限でプロパティを定義
class MyClass {
    public $pub = 'public';
    protected $pro = 'protected';
    private $pri = 'private';

    // プロパティをリスト表示するためのshowPropertyメソッド
    public function showProperty() {
        foreach ($this as $key => $value) {
            print "{$key}：{$value} <br />";
        }
    }
}
