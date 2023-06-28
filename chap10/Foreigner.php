<?php
require_once './Person.php';

class Foreigner extends Person {
    // 新たに追加したmiddleNameプロパティ
    public $middleName;

    // スーパークラスのコンストラクタをオーバライド（上書き）
    public function __construct(string $firstName, string $middleName, string $lastName) {
        // スーパークラスのコンストラクタを呼び出し
        parent::__construct($firstName, $lastName);
        // 独自のmiddleNameプロパティを初期化
        $this->middleName = $middleName;
    }

    // middleNameプロパティ対応にshowメソッドもオーバライド
    public function show() {
        print "<p>僕の名前は{$this->firstName}.{$this->middleName}.{$this->lastName}です。</p>";
    }
}