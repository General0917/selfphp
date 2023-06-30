<?php
class FriendList implements IteratorAggregate {
    // ダミープロパティを定義
    public $version = '1.0.0';
    public $name = '友人リスト';

    // Personオブジェクトのリストを格納するためのprivate変数
    private $list = [];

    // 反復処理の対象を定義
    public function getIterator() : Traversable {
        return new ArrayIterator($this->list);
    }

    // Personオブジェクトを追加するためのaddメソッド
    public function add(Person $p) {
        $this->list[] = $p;
    }

    // 指定されたインデックス番号に対応するPersonオブジェクトを取得
    public function __invoke($index) {
        return $this->list[$index];
    }

    // __cloneメソッドを利用することで、コピー先のプロパティ値を強制的に変更（値のみcloneされる）
    public function __clone() {
        foreach ($this->list as &$value) {
            $value = clone $value;
        }
    }
}