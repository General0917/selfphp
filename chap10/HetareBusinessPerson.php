<?php
require_once './BusinessPerson.php';

class HetareBusinessPerson extends BusinessPerson {
    // BusinessPersonクラスのworkメソッドをオーバーライド（上書き）
    public function work() {
        parent::work(); // スーパークラスのメソッドを呼び出す
        print 'ただし、ボチボチと...'; // 独自の処理を追加
    }
}